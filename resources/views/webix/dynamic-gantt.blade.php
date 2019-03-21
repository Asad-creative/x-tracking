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
		<div id="gantt_chart" style="height:500px;margin: 0 auto;"></div>
		<div id="date_scale" style="margin: 0 auto;"></div>
	
    <script type="text/javascript" charset="utf-8">
    	
    	/*var scaleHours = function() {
			gantt.config.scale_unit = "hour";
			gantt.config.date_scale = "%d %H : %i";
			gantt.load("{{ url('webix/get/gantt') }}");
		};*/

		var scaleDays = function() {
			gantt.config.scale_unit = "day";
			gantt.config.date_scale = "%d %M";
			gantt.load("{{ url('webix/get/gantt') }}");
		};
		var scaleWeeks = function() {
			gantt.config.scale_unit = "week";
			gantt.config.date_scale = "Week #%W";
			gantt.load("{{ url('webix/get/gantt') }}");
		};
		var scaleMonths = function() {
			gantt.config.scale_unit = "month";
			gantt.config.date_scale = "%F, %Y";
			gantt.load("{{ url('webix/get/gantt') }}");
		};

    	var toolbar = {
    		container: "date_scale",
		   	view: "toolbar",
		   	paddingY: 0,
		   	elements: [
		        {
		         	view: "segmented",
		         	on: {
			            onChange: function(id) {
			               	switch (id) {
			                  	/*case "hours":
			                     	scaleHours();
			                     	break;*/
			                    case "days":
			                     	scaleDays();
			                     	break;
			                  	case "weeks":
			                     	scaleWeeks();
			                     	break;
			                  	case "months":
			                     	scaleMonths();
			                     	break;
			                  	default:
			                     	webix.message("Wrong scale option");
			               }
			            }
		         	},
		         	options: [/*{
		            	id: "hours",
		            	value: "Hours"
		         	},*/{
		            	id: "days",
		            	value: "Days",
		            	selected: true
		         	}, {
		            	id: "weeks",
		            	value: "Weeks"
		         	}, {
		            	id: "months",
		            	value: "Months"
		         	}]
		     	}
		   ]
		};

		webix.ui({
			container: "gantt_chart",
		  	type:"space", 
		  	rows:[
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
		    },
		    toolbar
		  ]
		});
	
    </script>
@endsection