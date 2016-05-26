@extends('layouts.dashboard')

@section('content')
<<<<<<< HEAD
<div class="content-wrapper">
<section class="connectedSortable ui-sortable">
    <h1>{{$organization_name}}'s Events</h1>
=======
    <h1><a href="/organization/{{$organization->id}}">{{$organization->name}}</a>'s Events</h1>
>>>>>>> 84b4cc714923c0d8f93c4b39193932af3b0bec56
    @foreach($events as $event)
        <div style="float: right;">
            <div>
                {{$event->timing->format('Y-m-d, H:i a')}}
            </div>
            <div>
                {{$event->location}}
            </div>
        </div>
        <h2 style="margin-top: 20px">
            <a href="{{url('event', $event->id)}}">
                {{$event->name}}
            </a>
        </h2>
        <div>{{$event->description}}</div>
        <hr style="clear:both"/>

    @endforeach
    </section>
</div>
@endsection
