@extends('layouts.dashboard')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Locations
                <a class="btn btn-danger pull-right" style="margin-top: -7px;" type="button" href="{{ url('/addLocation') }}"><i class="glyphicon glyphicon-plus"></i> Add Location </a>
                </div>

                <div class="panel-body">
                    <form class="form" class="form-control" action="{{ url('myLocations') }}" files="">
                        <div class="col-md-12"><input name="search" id="autocomplete" class="form-control input-lg" placeholder="Search for location"/>
                        </div>
                    </form>
                    <div class="row">
                        @foreach ($areas as $area)
                        <div class="col-md-4">
                            <a href="myLocations/{{$area->id}}/show">{{$area->title}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>      
        </div>
    </div>
    <div class="row">
            <div class="col-md-10 col-md-offset-1">
                
                          <h3>Not approved locations &nbsp;<span class="badge badge-red">{{$not_approved_count}}</span></h3>
                          <p><div class="panel-heading">Not approved locations</div>
                                @foreach ($not_approved_locations as $na_location)
                                <div class="col-md-4 margin">
                                Title: <a href="myLocations/{{$na_location->id}}/show">{{$na_location->title}}</a><br>
                                Address: {{$na_location->searchmap}}
                                <div id="map-canvas{!! $na_location->id !!}" style="width:100%;height:150px;"></div>
                                <script type="text/javascript">
                                    var map = new google.maps.Map(document.getElementById('map-canvas{!! $na_location->id !!}'),
                                    {
                                        center:{
                                            lat:{{$na_location->lat}}, 
                                            lng:{{$na_location->lng}}
                                        },
                                        zoom:15
                                    });
                                    var marker = new google.maps.Marker({
                                        position:{
                                           lat:{{$na_location->lat}}, 
                                            lng:{{$na_location->lng}}
                                        },
                                        map:map,
                                        draggable:false
                                    });
                                </script>
                                </div>
                                @endforeach</p>
                        </div>
                        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                            <h3>Approved locations &nbsp;<span class="badge badge-red">{{$approved_count}}</span></h3>
                            <div class="panel-heading">Approved locations</div>
                            @foreach ($approved_locations as $app_location)
                                <div class="col-md-4 margin">
                                    Title: <a href="myLocations/{{$app_location->id}}/show">{{$app_location->title}}</a><br>
                                    Address: {{$app_location->searchmap}}
                                    <div id="map-canvas{!! $app_location->id !!}" style="width:100%;height:150px;"></div>
                                    <script type="text/javascript">
                                        var map = new google.maps.Map(document.getElementById('map-canvas{!! $app_location->id !!}'),
                                        {
                                            center:{
                                                lat:{{$app_location->lat}}, 
                                                lng:{{$app_location->lng}}
                                            },
                                            zoom:15
                                        });
                                        var marker = new google.maps.Marker({
                                            position:{
                                               lat:{{$app_location->lat}}, 
                                                lng:{{$app_location->lng}}
                                            },
                                            map:map,
                                            draggable:false
                                        });
                                    </script>
                                </div>
                            @endforeach
                        
</div></div>
</div>
<!-- 

                    <ul class="nav nav-tabs">
                    <li class="active">
                    <a data-toggle="collapse" href="#home">Not approved locations </a></li>
                    <li><a data-toggle="collapse" href="#menu1">Approved locations </a></li>
                    </ul> -->

                    <script type="text/javascript">
                    var availableTags = {!!$json_locations!!};
                    console.log(availableTags);
var availableTags_obj = JSON.parse(availableTags);
$( "#autocomplete" ).autocomplete({
    source: availableTags
});
</script>
    </div>
</div>
@endsection


