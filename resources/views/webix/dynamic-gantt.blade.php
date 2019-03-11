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
    	
		webix.ui({
		  type:"space", rows:[
		    { 	
			    view:"dhx-gantt",  
			    init:function(gantt_obj){
			        //do nothing
			    },
			    ready:function(gantt_obj){
			        //gantt_obj.config.xml_date = "%Y-%m-%d %H:%i:%s";
			        gantt_obj.load("{{ url('webix/get/gantt') }}");
			        var dp = new gantt_obj.dataProcessor("{{ url('webix/gantt') }}");
					dp.init(gantt_obj);
					dp.setTransactionMode("REST");
			    }
		    }
		  ]
		});
	
    </script>
@endsection