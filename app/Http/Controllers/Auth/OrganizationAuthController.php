<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterOrganizationRequest;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Organization;
use Validator;
use Auth;
use Input;

class OrganizationAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:organization', ['except' => 'logout']);
    }

    public function register(RegisterOrganizationRequest $request)
    {
        $organization_img = Input::file('organization_img')->getClientOriginalName();
        $gen_rand_name = rand().$organization_img;
        $destinationPath = base_path() . '/public/uploads';
        $request->file('organization_img')->Move(
        $destinationPath, $gen_rand_name
    );
        /*if(!$organization_img->move($destinationPath, $organization_img->getClientOriginalName())) {
            return $this->errors(['message' => 'Error saving the file.', 'code' => 400]);
        }

        return response()->json(['success' => true], 200);
*/        
        $organization = new Organization;
        $organization->name = $request->name;
        $organization->email = $request->email;
        $organization->organization_img = $gen_rand_name;
        $organization->password = bcrypt($request->password);
        $organization->save();
        auth()->guard('organization')->login($organization);
        return redirect('/');
    }

    public function login()
    {
        $input = Input::all();
        if(count($input) > 0)
        {
            $auth = auth()->guard('organization');

            $credentials = [
                'email' =>  $input['email'],
                'password' =>  $input['password'],
            ];

            if ($auth->attempt($credentials))
            {
                $organization = Organization::where('email','=',$input['email'])->first();
                auth()->guard('organization')->login($organization);
                return redirect('/');
            }
            return redirect('/login_organization')
                    ->withErrors(['Login'=>'These credentials do not match our records.']);
        }
        return redirect('/login_organization');
    }

    public function logout()
    {
        Auth::guard('organization')->logout();
        Auth::guard('user')->logout();
        return redirect('/');
    }
}
