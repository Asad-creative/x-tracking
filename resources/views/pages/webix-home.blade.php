@extends('welcome')

@section('content')
@component('partials.titles')
Webix Home
@endcomponent
<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">

Webix.ui({
    view:"calendar",
})
</script>



@endsection