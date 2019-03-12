@extends('layouts.app')

@section('content')
<!-- 	<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script> -->

    <link rel="stylesheet" href="//cdn.webix.com/edge/webix.css" type="text/css">
    <script src="//cdn.webix.com/edge/webix.js" type="text/javascript"></script>
    <!-- You can get this file from https://github.com/webix-hub/components -->
	<script src="https://cdn.webix.com/components/edge/gantt/gantt.js"></script>

    	<div style="margin-left: 11%;">
    		<a class="btn btn-danger" href="{{ url('webix/gantt') }}">Client Side Gantt</a>
    		<a class="btn btn-danger" href="{{ url('webix/dynamic/gantt') }}">Dynamic Gantt</a>
    	</div>
    	<br>
		<!-- <div id="box" style="width:1200px;height:470px;margin: 0 auto;"></div> -->
	
    <script type="text/javascript" charset="utf-8">
    	
    	var tasks =  {
		  data:[
		    {id:1, text:"Project #2", start_date:"01-04-2013", duration:18,order:10,
		     progress:0.4, open: true},
		    {id:2, text:"Task #1", 	  start_date:"02-04-2013", duration:8, order:10,
		     progress:0.6, parent:1},
		    {id:3, text:"Task #2",    start_date:"11-04-2013", duration:8, order:20,
		     progress:0.6, parent:1}
		  ],
		  links:[
		    { id:1, source:1, target:2, type:"1"},
		    { id:2, source:2, target:3, type:"0"},
		    { id:3, source:3, target:4, type:"0"},
		    { id:4, source:2, target:5, type:"2"},
		  ]
		};

		webix.ui({
		  type:"space", rows:[
		    { 	
			    view:"dhx-gantt",  
			    cdn:"https://cdn.dhtmlx.com/gantt/5.2",
			    init:function(gantt_obj){
			        //do nothing
			    },
			    ready:function(gantt_obj){
			        gantt_obj.parse(tasks);
			    }
		    }
		  ]
		});
	
    </script>
@endsection