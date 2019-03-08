<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use App\Hostname;
use App\Website;

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
        $this->middleware('auth');
        //$this->middleware('guest');
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
        $hostname = new Hostname(['fqdn' => $data['domain']]);
        app(HostnameRepository::class)->attach($hostname, $website);

        return $user;
    }
}
