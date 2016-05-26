<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Organization;
use Auth;
use Redirect;
use DB;

class addLocation extends Controller {

  public function store(Request $request) {
    // Getting all post data
    
      //$data = Input::all();
  	$organization = auth()->guard('organization')->user();
  	  $data = Input::all();
  	  $input = $request->all();
      /*addLocation::create( $data );*/
      DB::table('locations')->insert($data);
      return Redirect::to('myLocations');
}
}

