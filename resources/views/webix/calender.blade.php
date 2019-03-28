@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ asset('css/proteus.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script>
		
	<div class="container">
		<div id="box"></div>
	</div>

    <script type="text/javascript" charset="utf-8">
    	
    	var calendar = webix.ui({   
    		container:"box",
    		id:"calender_1",
		    view:"calendar",
		    date:new Date(),
		    events:webix.Date.isHoliday, 
		    weekHeader:true,
		    multiselect: "touch",
		    on:{
			    onDateSelect:function(selected_date){
			    	var date_selected = $$("calender_1").getSelectedDate();
			    	console.log(date_selected,"date_selected");
			    }
			},
		});
	
    </script>
@endsection