@extends('welcome')

@section('content')
               @component('partials.titles')
              Calendar
                 @endcomponent


            <div id ="box2"></div>
            <script type="text/javascript" charset="utf-8">
            
  webix.ui({
      view:"calendar",
      container:"box2",
  })
    </script>


            @endsection