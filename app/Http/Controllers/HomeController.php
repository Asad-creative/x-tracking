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
        $dt = $dt->where('parent_id',0)->orderBy('sort_order','ASC')->skip($skip)->take($take);
        if (isset($input['sort'])) {
            $dt = $dt->orderBy(array_keys($input['sort'])[0], array_values($input['sort'])[0]);
        }
        $dt = $dt->get();
        
        $data = [];
        foreach ($dt as $key=>$row) {
            $data[$key] = [
                "id"            => $row->id,
                "sort_order"    => $row->sort_order,
                "ref"           => $row->id,
                "title"         => $row->title,
                "team"          => $row->team,
                "client"        => $row->client,
                "pm"            => $row->pm,
                "status"        => $row->status,
                "deadline"      => $row->deadline,
                "created_at"    => $row->created_at->toDateTimeString()
            ];

            $childs = Datatable::where('parent_id',$row->id)->orderBy('sort_order','ASC')->get();
            if($childs){
                $data[$key]["open"] = true;
            }
            foreach($childs as $child_key => $child){
                $data[$key]["data"][$child_key] =  [
                    "id"            => $child->id,
                    "sort_order"    => $child->sort_order,
                    "ref"           => $child->id,
                    "title"         => $child->title,
                    "team"          => $child->team,
                    "client"        => $child->client,
                    "pm"            => $child->pm,
                    "status"        => $child->status,
                    "deadline"      => $child->deadline,
                    "created_at"    => $child->created_at->toDateTimeString()
                ];

                $descendents = Datatable::where('parent_id',$child->id)->orderBy('sort_order','ASC')->get();
                if($descendents){
                    $data[$key]["data"][$child_key]["open"] = true;
                }
                foreach($descendents as $descendent_key => $descendent){
                    $data[$key]["data"][$child_key]["data"][$descendent_key] =  [
                        "id"            => $descendent->id,
                        "ref"           => $descendent->id,
                        "title"         => $descendent->title,
                        "team"          => $descendent->team,
                        "client"        => $descendent->client,
                        "pm"            => $descendent->pm,
                        "status"        => $descendent->status,
                        "deadline"      => $descendent->deadline,
                        "created_at"    => $descendent->created_at->toDateTimeString()
                    ];
                }
            }
        }

        $return = json_encode(["data"=>$data,"pos"=> (int) $skip,"total_count"=> $total]);
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

        if($input['webix_operation'] == 'update_sort'){

            /*$changed_row = Datatable::find($request->row_id);
            $old_row = Datatable::where('parent_id',$request->parent_id)
                        ->where('sort_order', $request->sort_order)
                        ->update(['sort_order'=> $changed_row->sort_order]);
 
            $changed_row->parent_id = $request->parent_id;
            $changed_row->sort_order  = $request->sort_order;
     
            $changed_row->save();*/

            foreach(json_decode($request->parents) as $sort_order => $parent_id){
                
                $changed_row = Datatable::find($parent_id);
                $changed_row->parent_id   = 0;
                $changed_row->sort_order  = $sort_order;
                $changed_row->save();

            }

            $childs_array = [];
            foreach(json_decode($request->childs) as $child){
                
                $childs_array[$child->parent][] = $child->child_id; 
                
            }

            if(count($childs_array) > 0){
                foreach($childs_array as $parent_id => $childs){
                    foreach($childs as $child_key => $child_id){
                        $changed_row = Datatable::find($child_id);
                        $changed_row->parent_id   = $parent_id;
                        $changed_row->sort_order  = $child_key+1;
                        $changed_row->save();
                    }
                }
            }
            
            return response()->json([
                "action" => "updated"
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
