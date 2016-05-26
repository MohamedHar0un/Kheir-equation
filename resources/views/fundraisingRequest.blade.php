@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Fundraising Request</div>

                <div class="panel-body">
                <div class="container">Fill the form below<br></div>
                </div>
                <div class="panel-body">
                     <form class="form" class="form-control" action="{{ url('fundraising/request') }}" files="true" value="PATCH" role="form" method="POST">
                {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="">Project Name</label>
                        <input type="text" class="form-control input-sm" name="project_name" required="true"></input>
                    </div>
                    <div class="form-group">
                        <label for="">Project Description</label>
                        <input type="text" class="form-control input-sm" name="project_description" required="true"></input>
                    </div>
                    <div class="form-group">
                        <label for="project_location">Project Location</label>
                        <input type="text" name="project_location" class="form-control input-sm" id="searchmap" required="true"></input>
                        <div id="map-canvas" style="width:100%;height:500px;"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Latitude</label>
                        <input type="text" class="form-control input-sm" id="lat" name="lat" required="true"></input>
                    </div>
                    <div class="form-group">
                        <label for="">longitude</label>
                        <input type="text" class="form-control input-sm" id="lng" name="lng" required="true"></input>
                    </div>
                    <div class="form-group">
                        <label for="">Project Date</label>
                        <input type="date" class="form-control input-sm" name="project_date" required="true"></input>
                    </div>
                     <div class="form-group">
                        <label for="">Project Time From</label>
                        <input type="time" class="form-control input-sm" name="project_time_from"></input>
                    </div>
                    <div class="form-group">
                        <label for="">Project Time To</label>
                        <input type="time" class="form-control input-sm" name="project_time_to"></input>
                    </div>

                     <div class="form-group">
                        <label for="">Individuals Effected Number</label>
                        <input type="number" class="form-control input-sm" name="individuals_effected_number"></input>
                    </div>
                     <div class="form-group">
                        <label for="">Budget Required</label>
                        <input type="number" class="form-control input-sm" name="budget_required"></input>
                    </div>
                    <input type="text" value="{{auth()->guard('organization')->id()}}" class="form-control input-sm hidden" name="organization_id"></input>
                    <button class="btn btn-sm btn-danger" id="submit_location" type="Submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
                var map = new google.maps.Map(document.getElementById('map-canvas'),
                {
                    center:{
                        lat:30.050852, 
                        lng:31.236489
                    },
                    zoom:15
                });
                var marker = new google.maps.Marker({
                    position:{
                        lat:30.050852, 
                        lng:31.236489
                    },
                    map:map,
                    draggable:true
                });
                var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
                google.maps.event.addListener(searchBox,'places_changed', function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i,place;
                    for (var i = 0; place= places[i]; i++) {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);
                });
                google.maps.event.addListener(marker, 'position_changed',function(){
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();
                    $('#lat').val(lat);
                    $('#lng').val(lng);
                });
            </script>
@endsection
