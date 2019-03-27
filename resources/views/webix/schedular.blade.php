@extends('layouts.app')

@section('content')
<!-- 	<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script> -->

    <link rel="stylesheet" href="//cdn.webix.com/edge/webix.css" type="text/css">
    <script src="//cdn.webix.com/edge/webix.js" type="text/javascript"></script>
    <!-- You can get this file from https://github.com/webix-hub/components -->
	<script src="https://cdn.webix.com/components/edge/scheduler/scheduler.js"></script>

    	<div style="margin-left: 11%;">
    		<a class="btn btn-danger" href="{{ url('webix/gantt') }}">Client Side Schedular</a>
    		<a class="btn btn-danger" href="{{ url('webix/dynamic/gantt') }}">Dynamic Schedular</a>
    	</div>
    	<br>
		<!-- <div id="box" style="height:470px;margin: 0 auto;"></div> -->
	
    <script type="text/javascript" charset="utf-8">
    	
    	var scheduler_data = [
	      { "id": "0361150491", "start_date": "2019-03-26 07:00", "end_date": "2019-03-26 07:30", "text": "International Horse Show", "details": "Olympia"},
	      { "id": "0361150492", "start_date": "2019-03-27 14:00", "end_date": "2019-03-27 16:00", "text": "Ladbrokes.com World Darts Championship (Evening session)", "details": "Alexandra Palace"},
	      { "id": "0361150493", "start_date": "2019-03-28 08:00", "end_date": "2019-03-28 10:00", "text": "Peter Pan", "details": "O2 Arena"}
	  	];

		webix.ui({
		  type:"space", rows:[
		    { 
		      view:"dhx-scheduler", 
		      id:"scheduler",
		      date:new Date(),
		      init:function(){
		        this.getScheduler().config.xml_date="%Y-%m-%d %H:%i";
		        this.getScheduler().config.first_hour = 6;
		        this.getScheduler().config.multi_day = false;
		      },
		      ready:function(){
		        this.getScheduler().parse(scheduler_data, "json");
		      } 
		    }
		  ]
		});
	
    </script>
@endsection