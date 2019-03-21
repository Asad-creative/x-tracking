@extends('welcome')

@section('content')
<div id ="pk"></div>
            <script type="text/javascript" charset="utf-8">

webix.ui({
       container:"pk",
    rows:[
        { view:"template", template:"some text", type:"header" }, 

    ]
});
                 </script>

@endsection
