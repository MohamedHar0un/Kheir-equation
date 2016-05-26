<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use Redirect;
use DB;

class partnershipController extends Controller
{
    //
    public function request(Request $request) {
    	$organization = auth()->guard('organization')->user();
  	  $data = Input::all();
  	  $input = $request->all();
      /*addLocation::create( $data );*/
      DB::table('partnership_requests')->insert($data);
      return Redirect::to('/');
    	return view('partnershipRequest');
    }
}
