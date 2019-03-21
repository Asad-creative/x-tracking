@extends('welcome')

	@section('content')
		@component('partials.titles')
			Welcome
		@endcomponent
			@include('partials.nav')
	
	@endsection