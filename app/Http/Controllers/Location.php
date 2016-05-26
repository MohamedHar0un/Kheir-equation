<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
/*use Illuminate\Http\Request;*/
use Illuminate\Support\Facades\Request;
use Redirect;
use Response;
/*use App\Organization;
use Carbon\Carbon;
use Auth;*/
use DB;
class Location extends Controller
{
    //
    public function locations(Request $request) {
      $current_org_id = auth()->guard('organization')->id();
      $org_id = DB::table('locations')->select('organization_id')->get();
      $not_approved_locations = DB::table('locations')
      ->where('approved', '=', '0')
      ->where('organization_id', '=' ,$current_org_id)
      ->get();
      $location_id = DB::table('locations')
      ->select('id')
      ->where('organization_id', '=' ,$current_org_id)
      ->get();
      $na_count = DB::table('locations')
      ->where('approved', '=', '0')
      ->where('organization_id', '=' ,$current_org_id)
      ->count();
      $approved_locations = DB::table('locations')
      ->where('approved', '=', '1')
      ->where('organization_id', '=' ,$current_org_id)
      ->get();
      $app_count = DB::table('locations')
      ->where('approved', '=', '1')
      ->where('organization_id', '=' ,$current_org_id)
      ->count();
      $query = Request::input('search');
      $areas = DB::table('locations')
      ->where('title', 'LIKE', '%' . $query . '%')
      ->orwhere('searchmap', 'LIKE', '%' . $query . '%')
      ->paginate(10);
      $all__locations = DB::table('locations')
      ->select('title')
      ->where('organization_id', '=' ,$current_org_id)
      ->get();
      
      $json_locations = Response()
      ->json(array('all__locations'   => $all__locations)); 

        return view('myLocations', [
          'not_approved_locations' => $not_approved_locations,
          'approved_locations' => $approved_locations,
          'areas'=> $areas,
          'approved_count'=> $app_count,
          'not_approved_count'=> $na_count,
          'location_id' => $location_id,
          'json_locations'=>$json_locations]);
}


public function show($id)
  {
        $location = DB::table('locations')->where('id', '=', $id)->first();
        return view('showlocation',['location'=>$location]);
  }
/*    public function search(Request $request) {
      $query = Request::input('search');
      $areas = DB::table('locations')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);
      return view('myLocations', ['areas'=> $areas]);
}
*/}
