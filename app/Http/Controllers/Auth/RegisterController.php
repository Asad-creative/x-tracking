<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use App\Hostname;
use App\Website;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;

use Illuminate\Http\Request;
use Request as URLRequest;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'database' => ['required', 'string', 'min:6','unique:websites,uuid'],
            'domain' => ['required', 'string', 'min:6','unique:hostnames,fqdn'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


       $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        /*Company::create([
          'name' => $data['client_name'],
          'user_id' => $user->id,
        ]);*/

        /*
        |--------------------------------------------------------------------------
        | CREATE THE WEBSITE
        |--------------------------------------------------------------------------
         */

        $website = new Website(['uuid' => $data['database']]);

        app(WebsiteRepository::class)->create($website);


        /*
        |--------------------------------------------------------------------------
        | CREATE THE HOSTNAME
        |--------------------------------------------------------------------------
         */
        $subDomain    = $this->createSubdomain($data['domain']);
        $hostname = new Hostname(['fqdn' => $subDomain]);
        app(HostnameRepository::class)->attach($hostname, $website);
        $user->input_data =  $data ;
        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

      //  $this->guard()->login($user);
        // todo # go to subdomain from here
        $finalURL  = str_replace(URLRequest::getHost(), $this->createSubdomain($user->input_data['domain']), \URL::to('/'));
        return redirect($finalURL);
      //  return $this->registered($request, $user)  ?: redirect($this->redirectPath());
    }

    public function createSubdomain($domain)
    {
      $subDomain = $domain.'.'.URLRequest::getHost();

      return $subDomain;
    }
}
