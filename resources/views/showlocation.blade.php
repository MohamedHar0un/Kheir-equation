@extends('layouts.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h4>Area Name: <span>{{$location->title}}</span></h4>
			<h4>Area Government: <span>{{$location->gov_name}}</span></h4>
			<h4>Area District: <span>{{$location->dis_name}}</span></h4>
			<h4>Area Address On Map: <span>{{$location->searchmap}}</span></h4>
			<h4>Number Of Houses: <span>{{$location->house_no}}</span></h4>
			<h4>Houses Type: <span>{{$location->house_type}}</span></h4>
			<h4>Communication Method: <span>{{$location->comm_method}}</span></h4>
			<h4>Communication Method Information: <span>{{$location->comm_method_info}}</span></h4>
			<h4>Area Residents common or main job:<span>{{$location->area_main_job}}</span></h4>
			<a href="/myLocations">Go back to My Areas</a>
		</div>
		<div class="col-md-7">
			<div id="map-canvas{!! $location->id !!}" style="width:100%;height:350px;"></div>
                                <script type="text/javascript">
                                    var map = new google.maps.Map(document.getElementById('map-canvas{!! $location->id !!}'),
                                    {
                                        center:{
                                            lat:{{$location->lat}}, 
                                            lng:{{$location->lng}}
                                        },
                                        zoom:15
                                    });
                                    var marker = new google.maps.Marker({
                                        position:{
                                           lat:{{$location->lat}}, 
                                            lng:{{$location->lng}}
                                        },
                                        map:map,
                                        draggable:false
                                    });
                                </script>
		</div>
	</div>
</div>
@endsection
