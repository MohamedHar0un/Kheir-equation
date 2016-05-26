@extends('layouts.dashboard')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Location</div>
                <!-- <form class="form" class="form-control" files="true" value="PATCH" role="form" method="POST" action="{{ url('addLocation/store') }}"> -->
                <form class="form" class="form-control" action="{{ url('addLocation/store') }}" files="true" value="PATCH" role="form" method="POST">
                {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="">Area Name</label>
                        <input type="text" class="form-control input-sm" name="title" required="true"></input>
                    </div>
                    <div class="form-group">
                        <label for="">Governmet</label>
                        <input type="text" class="form-control input-sm" name="gov_name" required="true"></input>
                    </div>
                    <div class="form-group">
                        <label for="">District</label>
                        <input type="text" class="form-control input-sm" name="dis_name" required="true"></input>
                    </div>
                    <div class="form-group">
                        <label for="searchmap">Map</label>
                        <input type="text" name="searchmap" class="form-control input-sm" id="searchmap" required="true"></input>
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
                        <label for="">Number Of Houses</label>
                        <input type="number" class="form-control input-sm" name="house_no"></input>
                    </div>
                    <div class="form-group">
                        <label for="">Type Of Houses</label>
                        <input type="text" class="form-control input-sm" name="house_type"></input>
                    </div>
                    <div class="form-group">
                        <label> Communication method </label><br>
                        <input name="comm_method" type="radio" value="جمعية أهلية في المنطقة"><label>جمعية أهلية في المنطقة</label><br>
                        <input name="comm_method" type="radio" value="Guide"><label>Guide</label><br>
                        <input name="comm_method" type="radio" value="Directly with people without guides"><label>Directly with people without guides</label><br>
                        <!-- <select type="text" class="form-control input-sm" name="comm_method">
                          <option value="جمعية أهلية في المنطقة">جمعية أهلية في المنطقة</option>
                          <option value="Guide">Guide</option>
                          <option value="Directly with people without guides">Directly with people without guides</option>
                        </select> -->
                    </div>
                     <div class="form-group">
                        <label for="">Communication method information</label>
                        <input type="text" class="form-control input-sm" name="comm_method_info"></input>
                    </div>
                     <div class="form-group">
                        <label for="">Area Residents common or main job</label>
                        <input type="text" class="form-control input-sm" name="area_main_job"></input>
                    </div>
                    <input type="text" value="{{auth()->guard('organization')->id()}}" class="form-control input-sm hidden" name="organization_id"></input>
                    
                    <button class="btn btn-sm btn-danger" id="submit_location" type="Submit">Save</button>
                    </form>
                <div class="panel-body">
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
         <!--    <script type="text/javascript">
$(document).ready(function(){
  $('#submit_location').click(function(){            
    $.ajax({
      url: 'add',
      type: "post",
      data: {
          'title':$('input[name=title]').val(),
          'searchmap': $('input[name=searchmap]').val(),
          'lat': $('input[name=lat]').val(),
          'lng': $('input[name=lng]').val()
  },
      success: function(data){
        alert(data);
      }
    });      
  }); 
});
</script> -->
                
        </div>
    </div>
</div>
@endsection
