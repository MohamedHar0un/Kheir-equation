@extends('layouts.app')

@section('content')

    <h1 class="well well-lg">Upload Photos to your event: <a href="/event/{{$event->id}}">{{$event->name}}</a></h1>
    <div class="container">
        @if(isset($success))
            <div class="alert alert-success"> {{$success}} </div>
        @endif
        {!! Form::model($event, array( 'method' => 'POST','files'=> true,'action' =>array('Event\EventGalleryController@upload',$event->id))) !!}
        <div class="form-group">
            {!! Form::label('image', 'Choose photos') !!}
            {!! Form::file('images[]',array('multiple'=>true)) !!}
        </div>
        {!! Form::submit('Save', array( 'class'=>'btn btn-danger form-control' )) !!}
        {!! Form::close() !!} 
    @include('errors')
@stop