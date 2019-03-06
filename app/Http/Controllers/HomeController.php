<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function datatable(Request $request)
    {
        $input = $request->all();
        $skip = isset($input['start'])?$input['start']:0;
        $take = isset($input['count'])?$input['count']:10;
        
        $dt = new Datatable();
        if(isset($input['filter'])){
            if($input['filter']['ref'] != ""){
                $dt = $dt->where('id','LIKE','%'. $input['filter']['ref'] .'%');
            } elseif ($input['filter']['title'] != ""){
                $dt = $dt->where('title','LIKE','%'. $input['filter']['title'] .'%');
            } elseif ($input['filter']['team'] != ""){
                $dt = $dt->where('team','LIKE','%'. $input['filter']['team'] .'%');
            } elseif ($input['filter']['client'] != ""){
                $dt = $dt->where('client','LIKE','%'. $input['filter']['client'] .'%');
            } elseif ($input['filter']['pm'] != ""){
                $dt = $dt->where('pm','LIKE','%'. $input['filter']['pm'] .'%');
            } elseif ($input['filter']['status'] != ""){
                $dt = $dt->where('status','LIKE','%'. $input['filter']['status'] .'%');
            } elseif ($input['filter']['deadline'] != ""){
                $dt = $dt->where('deadline','LIKE','%'. $input['filter']['deadline'] .'%');
            } elseif ($input['filter']['created_at'] != ""){
                $dt = $dt->where('created_at','LIKE','%'. $input['filter']['created_at'] .'%');
            }  
        }

        $total = $dt->count();
        //sort[team]
        $dt = $dt->skip($skip)->take($take);
        if(isset($input['sort'])){
            $dt = $dt->orderBy(array_keys($input['sort'])[0], array_values($input['sort'])[0]);
        }
        $dt = $dt->get();
        
        
        $data = [];
        foreach($dt as $row){
            $data[] = [
                "id"            => $row->id,
                "ref"           => $row->id,
                "title"         => $row->title,
                "team"          => $row->team,
                "client"        => $row->client,
                "pm"            => $row->pm,
                "status"        => $row->status,
                "deadline"      => $row->deadline,
                "created_at"     => $row->created_at->toDateTimeString()
            ];
            
        }

        $return = json_encode(["data"=>$data,"pos"=> (int) $skip,"total_count"=> $total]);
        /*echo "<pre>";
        print_r($return);
        die;*/
        return $return;
    }
    
}
