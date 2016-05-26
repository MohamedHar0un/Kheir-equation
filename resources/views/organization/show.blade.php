@extends('layouts.app')

@section('styling')
    <style media="screen">
        .jumbotron h1{
            text-align: center;
        }

        .vol-act{
            float: right;
            background-color: orange;
            width: 120px;
        }
    </style>
@endsection

@section('content')
    @include('errors')
    <div class="jumbotron">
        <h1>{{$organization->name}}</h1>

        @if($canReview)
            @include('organization.partials.button', ['action' => 'review/create', 'buttonText' => 'Rate & Review!'])
        @endif

        @if($state==3)
            @include('organization.partials.button', ['action' => 'subscribe', 'buttonText' => 'Subscribe'])
        @elseif($state==2)
            @include('organization.partials.button', ['action' => 'unsubscribe', 'buttonText' => 'Unsubscribe'])
        @endif

        @if($state==2 || $state==3)
            @include('organization.partials.button', ['action' => 'recommend', 'buttonText' => 'Recommend'])
        @endif

        @if($state >= 2 && !$blocked)
            @include('organization.partials.button', ['action' => 'block', 'buttonText' => 'Block'])
        @endif

        @if($state >= 2 && $blocked)
            @include('organization.partials.button', ['action' => 'unblock', 'buttonText' => 'Unblock'])
        @endif

        @if(Auth::guard('organization')->id() == $organization->id)
            @include('organization.partials.button', ['action' => 'edit', 'buttonText' => 'Edit Profile'])
        @endif

        @if(Auth::user() && Auth::user()->role == 8)
            <form action="{{ url('/organization/'.$organization->id) }}" method="POST">
                 {!! csrf_field() !!}
                 {!! method_field('DELETE') !!}
                 <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-event">Delete organization</button>
            </form>
        @endif

        <p>Slogan: {{$organization->slogan}}</p>
        <p>Bio: {{$organization->bio}}</p>
        <p>Location: {{$organization->location}}</p>
        <p>Phone: {{$organization->phone}}</p>
        <p>Rating:
            @if($organization->rating)
                {{number_format($organization->rating, 1)}}
            @else
                No rating yet!
            @endif
        </p>
        <p>Subscribers: {{count($organization->subscribers)}}</p>
        <p>Events submitted: {{count($organization->events()->withTrashed()->get())}}</p>
        <p>Events held: {{count($organization->events()->get())}}</p>

        <h4>Events</h4>
        <ul>
            @for ($i = 0; $i < 3 && $i < count($organization->events); $i++)
                <li>{{$organization->events[$i]->name}}</li>
            @endfor
            @if(count($organization->events))
                    <a href="/organization/{{$organization->id}}/events">View All >></a>
            @endif

        </ul>

        <h4>Reviews</h4>
        <ul>
            @for($i = 0; $i < 3 && $i < count($organization->reviews); $i++)
                <li>{{$organization->reviews[$i]->review}}, {{$organization->reviews[$i]->rating}}</li>
            @endfor
            @if(count($organization->reviews))
                    <a href="/organization/{{$organization->id}}/reviews">View All >></a>
            @endif
        </ul>
    </div>
@stop
