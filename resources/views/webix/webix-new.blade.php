@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script>
	<div id="box" style="width:1200px;height:600px;margin: 0 auto;"></div>
    <script type="text/javascript" charset="utf-8">
  webix.ui({
      view:"calendar",
  })
    </script>
@endsection