@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper">
	<h1>Create A New Event</h1>
	{!! Form::open(['action' => ['Event\EventController@store']]) !!}
		@include('event.partials.form', ['submitButtonText' => 'Create Event'])
	{!! Form::close() !!}
	@include('errors')
	</div>
@stop
