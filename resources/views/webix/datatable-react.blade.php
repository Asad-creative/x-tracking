@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script>
    <!-- <script src="https://cdn.webix.com/components/edge/ckeditor/ckeditor.js"></script>
    <script src="https://cdn.webix.com/components/edge/scheduler/scheduler.js"></script> -->
    <script src="https://cdn.webix.com/components/edge/gantt/gantt.js"></script>
    

<div id="app"></div>
<script src="{{ asset('js/app.js') }}"></script>



@endsection