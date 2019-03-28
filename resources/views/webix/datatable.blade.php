@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ asset('css/proteus.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script>

    	<div style="margin-left: 11%;">
    		<a class="btn btn-danger" href="{{ url('webix/datatable') }}">Client Side Data</a>
    		<a class="btn btn-danger" href="{{ url('webix/dynamic/datatable') }}">Dynamic Data</a>
		</div>
		
		<br>
		
		<div id="box" style="width:1300px;height:470px;margin: 0 auto;"></div>
		<div id="paging_wrapper" style="margin-left: 10%;"></div>
    
    <script type="text/javascript" charset="utf-8">
    	
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
		        { id:"title", template:"{common.treetable()} #title#",		header:[ "Title",{content:"textFilter"}], 			width:250, sort:"string" },
		        { id:"team",   		header:[ "Team",{content:"textFilter"}],          	width:200, sort:"string"},
		        { id:"client",  	header:[ "Client",{content:"textFilter"}],         	width:120, sort:"string"},
		        { id:"pm",    		header:[ "PM",{content:"textFilter"}],         		width:120, sort:"string"},
		        { id:"status",    	header:[ "Status",{content:"textFilter"}],       	width:90, sort:"string"},
		        { id:"deadline",    header:[ "Deadline",{content:"textFilter"}],      	width:120, sort:"string"},
		        { id:"date-sent",   header:[ "Date Sent",{content:"textFilter"}],     	width:120, sort:"string"}
		    ],
		    //url:"{{ url('data.json') }}"
		    data:[
		        {
				    "id": 1,
				    "ref": 1,
				    "title": "et, lacinia vitae,",
				    "team": "Mercedes O. Vaughan",
				    "client": "Vera",
				    "pm": "Armand",
				    "status": "Send",
				    "deadline": "Nov 6, 2019",
				    "date-sent": "Sep 1, 2018"
				  },
				  {
				    "id": 2,
				    "ref": 2,
				    "title": "eu nibh vulputate mauris sagittis",
				    "team": "Xena J. Jarvis",
				    "client": "Kennedy",
				    "pm": "Arthur",
				    "status": "Pending",
				    "deadline": "Oct 10, 2018",
				    "date-sent": "Sep 25, 2018"
				  },
				  {
				    "id": 3,
				    "ref": 3,
				    "title": "consectetuer, cursus",
				    "team": "Miranda V. Carver",
				    "client": "Zelda",
				    "pm": "Hamilton",
				    "status": "Send",
				    "deadline": "Sep 4, 2018",
				    "date-sent": "May 10, 2018"
				  },
				  {
				    "id": 4,
				    "ref": 4,
				    "title": "laoreet lectus quis",
				    "team": "Aline U. Whitney",
				    "client": "Cole",
				    "pm": "Dale",
				    "status": "Send",
				    "deadline": "May 14, 2019",
				    "date-sent": "Apr 29, 2018"
				  }
				]
			});
	
    </script>
@endsection