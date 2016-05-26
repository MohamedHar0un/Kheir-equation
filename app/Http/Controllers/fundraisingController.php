<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use Redirect;
use DB;

class fundraisingController extends Controller
{
    //
    public function request(Request $request) {
    	$organization = auth()->guard('organization')->user();
  	  $data = Input::all();
  	  $input = $request->all();
      /*addLocation::create( $data );*/
      DB::table('fundraising_requests')->insert($data);
      return Redirect::to('/');
    	return view('fundraisingRequest');
    }
}

