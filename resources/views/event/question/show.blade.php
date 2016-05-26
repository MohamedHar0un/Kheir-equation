@extends('layouts.dashboard')


@section('content')

	<div class="container">
		<h3>{{ $question->question}}</h3>
		<h4>{{ $question->question_body}}</h4>
		<div class="container">
			<p>{{ $question->answer }}</p>
		</div>
	</div>

@stop
