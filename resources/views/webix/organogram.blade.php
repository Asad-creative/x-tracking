@extends('layouts.app')

@section('content')
<!-- 	<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script> -->

    <link rel="stylesheet" href="//cdn.webix.com/edge/webix.css" type="text/css">
    <script src="//cdn.webix.com/edge/webix.js" type="text/javascript"></script>

    	<div style="margin-left: 11%;">
    		<a class="btn btn-danger" href="{{ url('webix/organogram') }}">Client Side Organogram</a>
    		<a class="btn btn-danger" href="{{ url('webix/dynamic/datatable') }}">Dynamic Organogram</a>
    	</div>
    	<br>
		<div id="box" style="width:1200px;height:470px;margin: 0 auto;"></div>
	
    <script type="text/javascript" charset="utf-8">
    	
    	chart_data = [
			{id:"root", value:"Board of Directors",  data:[
				{ id:"1", value:"Managing Director", data:[
					{id:"1.1", value:"Base Manager", data:[
						{ id:"1.1.1", value:"Store Manager" },
						{ id:"1.1.2", value:"Office Assistant", data:[
							{ id:"1.1.2.1", value:"Dispatcher", data:[
								{ id:"1.1.2.1.1", value:"Drivers" }
							] }

						] },
						{ id:"1.1.3", value:"Security" }
					]},
					{ id:"1.2", value:"Business Development Manager", data:[
						{ id:"1.2.1", value:"Marketing Executive" }
					]},
					{ id:"1.3", value:"Finance Manager", data:[
						{ id:"1.3.1", value:"Accountant", data:[
							{ id:"1.3.1.1", value:"Accounts Officer" }
						] }
					] },
					{ id:"1.4", value:"Project Manager", data:[
						{ id:"1.4.1", value:"Supervisors",data:[
							{ id:"1.4.1.1", value:"Foremen"}
						]}
					] }
				]}
			]}
		];
    
    	var orgChart = new webix.ui({
		    container:"box",
		    view:"organogram",
		    select: true,
	  		borderless: true,
	  		data: chart_data
		});
	
    </script>
@endsection