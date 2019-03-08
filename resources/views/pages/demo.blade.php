@extends('welcome')

	@section('content')
		@component('partials.titles')
			Welcome
		@endcomponent
			@include('partials.nav')
		<!-- SLIDER -->
		@include('partials.slider')
		<!-- SLIDER-->
	@endsection