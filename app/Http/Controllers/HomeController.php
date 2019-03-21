<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatable;
use App\Task;
use App\Link;


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

        $users = User::select('name','email','created_at')->where('id',"!=",Auth::id())->get()->toArray();
        return view('home',["users"=>$users]);
    }

    public function datatable(Request $request)
    {
        $input = $request->all();
        $skip = isset($input['start'])?$input['start']:0;
        $take = isset($input['count'])?$input['count']:10;
        
        $dt = new Datatable();
        if (isset($input['filter'])) {
            if ($input['filter']['ref'] != "") {
                $dt = $dt->where('id', 'LIKE', '%'. $input['filter']['ref'] .'%');
            } elseif ($input['filter']['title'] != "") {
                $dt = $dt->where('title', 'LIKE', '%'. $input['filter']['title'] .'%');
            } elseif ($input['filter']['team'] != "") {
                $dt = $dt->where('team', 'LIKE', '%'. $input['filter']['team'] .'%');
            } elseif ($input['filter']['client'] != "") {
                $dt = $dt->where('client', 'LIKE', '%'. $input['filter']['client'] .'%');
            } elseif ($input['filter']['pm'] != "") {
                $dt = $dt->where('pm', 'LIKE', '%'. $input['filter']['pm'] .'%');
            } elseif ($input['filter']['status'] != "") {
                $dt = $dt->where('status', 'LIKE', '%'. $input['filter']['status'] .'%');
            } elseif ($input['filter']['deadline'] != "") {
                $dt = $dt->where('deadline', 'LIKE', '%'. $input['filter']['deadline'] .'%');
            } elseif ($input['filter']['created_at'] != "") {
                $dt = $dt->where('created_at', 'LIKE', '%'. $input['filter']['created_at'] .'%');
            }
        }

        $total = $dt->count();
        //sort[team]
        $dt = $dt->skip($skip)->take($take);
        if (isset($input['sort'])) {
            $dt = $dt->orderBy(array_keys($input['sort'])[0], array_values($input['sort'])[0]);
        }
        $dt = $dt->get();
        
        
        $data = [];
        $i = 0;
        foreach ($dt as $key=>$row) {
            $data[$key] = [
                "id"            => $row->id,
                "ref"           => $row->id,
                "title"         => $row->title,
                "team"          => $row->team,
                "client"        => $row->client,
                "pm"            => $row->pm,
                "status"        => $row->status,
                "deadline"      => $row->deadline,
                "created_at"    => $row->created_at->toDateTimeString()
            ];

            if($i==3){
                $i = 0;
                $data[$key]["open"] = true;
                $data[$key]["data"] = 
                [
                    [
                        "id"            => 555+$row->id,
                        "ref"           => 555+$row->id,
                        "title"         => $row->title,
                        "team"          => $row->team,
                        "client"        => $row->client,
                        "pm"            => $row->pm,
                        "open"          => true,
                        "data"          => [
                            [
                                "id"            => 5556+$row->id,
                                "ref"           => 5556+$row->id,
                                "title"         => $row->title,
                                "team"          => $row->team,
                                "client"        => $row->client,
                                "pm"            => $row->pm,
                                "status"        => $row->status,
                                "deadline"      => $row->deadline,
                                "created_at"    => $row->created_at->toDateTimeString()
                            ]
                        ],
                        "status"        => $row->status,
                        "deadline"      => $row->deadline,
                        "created_at"    => $row->created_at->toDateTimeString()
                    ],
                    [
                        "id"            => 556+$row->id,
                        "ref"           => 556+$row->id,
                        "title"         => $row->title,
                        "team"          => $row->team,
                        "client"        => $row->client,
                        "pm"            => $row->pm,
                        "status"        => $row->status,
                        "deadline"      => $row->deadline,
                        "created_at"    => $row->created_at->toDateTimeString()
                    ],
                    [
                        "id"            => 557+$row->id,
                        "ref"           => 557+$row->id,
                        "title"         => $row->title,
                        "team"          => $row->team,
                        "client"        => $row->client,
                        "pm"            => $row->pm,
                        "status"        => $row->status,
                        "deadline"      => $row->deadline,
                        "created_at"    => $row->created_at->toDateTimeString()
                    ]
                ];
            }
            $i++;
        }

        $return = json_encode(["data"=>$data,"pos"=> (int) $skip,"total_count"=> $total]);
        /*echo "<pre>";
        print_r($return);
        die;*/
        return $return;
    }

    public function datatable_action(Request $request)
    {
        $input = $request->all();
        if($input['webix_operation'] == 'insert'){
            $dt = new Datatable();
 
            $dt->title      = $request->title;
            $dt->team       = $request->team;
            $dt->client     = $request->client;
            $dt->pm         = $request->pm;
            $dt->status     = $request->status;
            $dt->deadline   = $request->deadline;
     
            $dt->save();

            return response()->json([
                "action"=> "inserted",
                "tid" => $dt->id
            ]);
        }

        if($input['webix_operation'] == 'update'){
            $dt = Datatable::find($request->id);
 
            $dt->title      = $request->title;
            $dt->team       = $request->team;
            $dt->client     = $request->client;
            $dt->pm         = $request->pm;
            $dt->status     = $request->status;
            $dt->deadline   = $request->deadline;
     
            $dt->save();

            return response()->json([
                "action"=> "updated"
            ]);
        }

        if($input['webix_operation'] == 'delete'){

            $dt = Datatable::find($request->id);
            $dt->delete();
            return response()->json([
                "action"=> "deleted"
            ]);
        }
    }

    public function gantt(Request $request)
    {
        /*$input = $request->all();
        $data = [
            [
                "id"=>1, 
                "text"=>"Project #2", 
                "start_date"=>"01-04-2013", 
                "duration"=>18,
                "order"=>10,
                "progress"=>0.4,
                "open"=> true
            ],
            [
                "id"=>2, 
                "text"=>"Task #1", 
                "start_date"=>"02-04-2013", 
                "duration"=>8,
                "order"=>10,
                "progress"=>0.6,
                "parent"=> 1
            ],
            [
                "id"=>3, 
                "text"=>"Task #2", 
                "start_date"=>"11-04-2013", 
                "duration"=>8,
                "order"=>20,
                "progress"=>0.6,
                "parent"=> 1
            ]
        ];

        $links = [
            [
                "id"=>1, 
                "source"=>1, 
                "target"=>2, 
                "type"=>"1"
            ],
            [
                "id"=>2, 
                "source"=>2, 
                "target"=>3, 
                "type"=>"0"
            ],
            [
                "id"=>3, 
                "source"=>3, 
                "target"=>4, 
                "type"=>"0"
            ],
            [
                "id"=>4, 
                "source"=>2, 
                "target"=>5, 
                "type"=>"2"
            ],
        ];*/

        $tasks = Task::get();
        
        $tasks_data = [];
        foreach($tasks as $task){
            $tasks_data[] = [
                "id"            => $task->id, 
                "text"          => $task->text, 
                "start_date"    => date("d-m-Y",strtotime($task->start_date)), 
                "duration"      => $task->duration,
                "progress"      => $task->progress,
                "parent"        => $task->parent,
                "open"          => $task->open
            ];
        }

        $links = new Link();

        return response()->json([
            "data" => $tasks_data,
            "links" => $links->all()
        ]);
    }
}
