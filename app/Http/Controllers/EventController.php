<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = new Event();
 
        return response()->json([
            "data" => $events->all()
        ]);
    }

    public function store(Request $request){
 
       $event = new Event();
 
       $event->text = strip_tags($request->text);
       $event->start_date = $request->start_date;
       $event->end_date = $request->end_date;
       $event->save();
 
       return response()->json([
           "action"=> "inserted",
           "tid" => $event->id
       ]);
    }
 
    public function update($id, Request $request){
       $event = Event::find($id);
 
       $event->text = strip_tags($request->text);
       $event->start_date = $request->start_date;
       $event->end_date = $request->end_date;
       $event->save();
 
        return response()->json([
           "action"=> "updated"
        ]);
    }
 
    public function destroy($id){
        $event = Event::find($id);
        $event->delete();
 
        return response()->json([
           "action"=> "deleted"
        ]);
    }
}
