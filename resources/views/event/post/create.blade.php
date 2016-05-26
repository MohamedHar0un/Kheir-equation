@extends('layouts.dashboard')
@section('content')
{!! Form::open(['action' => ['Event\EventPostController@store', $event_id]]) !!}


<div class="content-wrapper">

<div class="form-group" style="margin-left: 20px;">
<h1> Create New Post </h1>
</div>


	<div class="form-group">
	{!! Form::label("title", "Title") !!} <br />
	{!! Form::text("title", null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::label("Send Notifications") !!}
	{!! Form::checkbox('sendnotifications', 1); !!}
	</div>
	<div class="form-group">
	{!! Form::label("description", "Description") !!} <br />
	{!! Form::textarea("description", null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::submit("Post", ['class' => 'btn btn-default']) !!}
	{!! Form::close() !!}
	</div>
</div>
	@include('errors')


@endsection
