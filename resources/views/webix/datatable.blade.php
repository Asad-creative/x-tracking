@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script>

    	<!-- <div style="margin-left: 11%;">
    		<a class="btn btn-danger" href="{{ url('webix/datatable') }}">Client Side Data</a>
    		<a class="btn btn-danger" href="{{ url('webix/dynamic/datatable') }}">Dynamic Data</a>
		</div> -->
		
		<div class="container">
			<h1 class="title">Webix Datatable</h1>
			<div id="box"></div>
			<div id="paging_wrapper"></div>
		</div>
    <script type="text/javascript" charset="utf-8">
    	
    	/*webix.locale.pager = {
		    first: "First", // the first button
		    last:  "Last", // the last button
		    next:  "Next", // the next button
		    prev:  "Prev"  // the previous button
		};*/

    	webix.ui({
			container:"box",
			scroll:false,
		    view:"datatable",
		    pager:{
		        template:"{common.first()} {common.prev()} {common.pages()} {common.next()} {common.last()}",
		        container:"paging_wrapper",
		        size:8,
		        group:5
		    },
		    columns:[
		        { id:"ref",   		header:[ "Ref",{content:"textFilter"}], 			width:70, sort:"int"},
		        { id:"title",		header:[ "Title",{content:"textFilter"}], 			width:250, sort:"string" },
		        { id:"team",   		header:[ "Team",{content:"textFilter"}],          	width:200, sort:"string"},
		        { id:"client",  	header:[ "Client",{content:"textFilter"}],         	width:120, sort:"string"},
		        { id:"pm",    		header:[ "PM",{content:"textFilter"}],         		width:120, sort:"string"},
		        { id:"status",    	header:[ "Status",{content:"textFilter"}],       	width:90, sort:"string"},
		        { id:"deadline",    header:[ "Deadline",{content:"textFilter"}],      	width:120, sort:"string"},
		        { id:"date-sent",   header:[ "Date Sent",{content:"textFilter"}],     	width:120, sort:"string"}
		    ],
		    url:"{{ url('data.json') }}"
		});
	
    </script>
@endsection