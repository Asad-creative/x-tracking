@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script>

    	<div style="margin-left: 11%;">
    		<a class="btn btn-danger" href="{{ url('webix/datatable') }}">Client Side Data</a>
    		<a class="btn btn-danger" href="{{ url('webix/dynamic/datatable') }}">Dynamic Data</a>
    	</div>
    	<br>
		<div id="box" style="width:1200px;height:470px;margin: 0 auto;"></div>
		<div id="paging_here" style="margin-left: 10%;"></div>
	
    <script type="text/javascript" charset="utf-8">
    	
    	/*webix.locale.pager = {
		    first: "First", // the first button
		    last:  "Last", // the last button
		    next:  "Next", // the next button
		    prev:  "Prev"  // the previous button
		};*/

    	webix.ui({
		    container:"box",
		    view:"datatable",
		    pager:{
		        template:"{common.first()} {common.prev()} {common.pages()} {common.next()} {common.last()}",
		        container:"paging_here",
		        size:10,
		        group:5
		    },
		    columns:[
		        { id:"ref",   		header:[ "Ref",{content:"serverFilter"}], 			width:70, sort:"server"},
		        { id:"title",		header:[ "Title",{content:"serverFilter"}], 		width:250, sort:"server" },
		        { id:"team",   		header:[ "Team",{content:"serverFilter"}],          width:200, sort:"server"},
		        { id:"client",  	header:[ "Client",{content:"serverFilter"}],        width:120, sort:"server"},
		        { id:"pm",    		header:[ "PM",{content:"serverFilter"}],         	width:120, sort:"server"},
		        { id:"status",    	header:[ "Status",{content:"serverFilter"}],       	width:120, sort:"server"},
		        { id:"deadline",    header:[ "Deadline",{content:"serverFilter"}],      width:150, sort:"server"},
		        { id:"created_at",   header:[ "Date Sent",{content:"serverFilter"}],     width:150, sort:"server"}
		    ],
		    on:{
			    onBeforeLoad:function(){
			        this.showOverlay("Loading...");
			    },
			    onAfterLoad:function(){
			        this.hideOverlay();
			    }
			},
		    datafetch:10,
		    url:"{{ url('webix/get/datatable') }}"
		});
	
    </script>
@endsection