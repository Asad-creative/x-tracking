@extends('welcome')

@section('content')
<div id ="box2"></div>
            <script type="text/javascript" charset="utf-8">
var headerlayout = webix.ui({
  cols:[
    { header:"col 1", body:"content 1", width:150},
    { header:"col 2", body:"content 2", width:150},
    { header:"col 3", body:"content 3", width:150}
  ]
});
                 </script>

@endsection
