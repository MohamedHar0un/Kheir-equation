<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\RecommendationRequest;
use App\Http\Requests\OrganizationRequest;
use App\Http\Requests\ReviewRequest;
use App\Http\Services\OrganizationService ;
use App\Organization;
use App\Recommendation;
use App\OrganizationReview;
use DB;
use Hash;
use Auth;


class OrganizationController extends Controller
{

    private $organizationService;

    public function __construct()
    {
        $this->organizationService = new OrganizationService();

        $this->middleware('auth_volunteer', ['only' => [
            'subscribe', 'unsubscribe',
            'recommend', 'storeRecommendation',
            'block', 'unblock'
        ]]);

        $this->middleware('auth_organization', ['only' => [
            'edit', 'update', 'viewRecommendations'
        ]]);

        $this->middleware('auth_admin', ['only' => [
            'destroy',
        ]]);
    }

    /**
    * Show organization profile.
    * State->auth
    * 	0 => Guest
    * 	1 => Auth is organization
    * 	2 => Auth is volunteer and subscribed to this organization
    * 	3 => Auth is volunteer and not subscribed to this organization
    */
    public function show($id)
    {
        $organization = Organization::findOrFail($id);
        $state = 0;
        $blocked = 0;
        if(auth()->guard('organization')->check())
            $state = 1;
        else if (Auth::user())
        {
            $blocked = Auth::user()->blockedOrganizations()->find($id);
            if(Auth::user()->subscribedOrganizations()->find($id))
                $state = 2;
            else
                $state = 3;
        }

        $canReview = Auth::user() && Auth::user()->role > 0
                  && !Auth::user()->organizationReviews()->find($organization->id);

        return view('organization.show',compact('organization', 'state', 'blocked', 'canReview'));
    }


    public function home()
    {
        $current_org_id = auth()->guard('organization')->id();
      /*$org_id = DB::table('partnership_requests')->select('organization_id')->get();*/

      $partnership_requests = DB::table('partnership_requests')
      ->where('organization_id', '=' ,$current_org_id)
      ->get();

      $manpower_requests = DB::table('manpower_requests')
      ->where('organization_id', '=' ,$current_org_id)
      ->get();

      $fundraising_requests = DB::table('fundraising_requests')
      ->where('organization_id', '=' ,$current_org_id)
      ->get();

     
    return view('home',[
          'partnership_requests' => $partnership_requests,
          'manpower_requests' => $manpower_requests,
          'fundraising_requests'=> $fundraising_requests
                ]);
/*        $organization = Organization::findOrFail($id);
        if(auth()->guard('organization')->check())
            return view('home',compact('organization','state','events',));
        else if (Auth::user())
                if(Auth::user()->subscribedOrganizations()->find($id))
                    return view('home',compact('organization','state','events'));
                else*/
        
    }

    /**
    * Edit organization profile.
    */
    public function edit($id)
    {
        if(auth()->guard('organization')->id() == $id)
        {
            $organization = Organization::findorfail($id);
            return view('organization.edit' , compact('organization'));
        }
        return redirect('/');
    }

    /**
    * Update organization profile.
    */
    public function update(OrganizationRequest $request, $id)
    {
        $this->organizationService->update($request , $id);
        return redirect()->action('Organization\OrganizationController@show', [$id]);
    }

    /**
     * A volunteer can subscribe for an organization.
     */
    public function subscribe($id)
    {
        $this->organizationService->subscribe($id);
        return redirect()->action('Organization\OrganizationController@show', [$id]);
    }

    /**
     * A volunteer can unsubscribe from an organization.
     */
    public function unsubscribe($id)
    {
        $this->organizationService->unsubscribe($id);
        return redirect()->action('Organization\OrganizationController@show', [$id]);
    }

    /**
     * Recommendation Form.
     */
    public function recommend($id)
    {
        return view('organization.recommendation.create' , compact('id'));
    }

    /**
     * A volunteer can send a recommendation to an organization.
     */
    public function storeRecommendation(RecommendationRequest $request , $id)
    {
        $this->organizationService->storeRecommendation($request, $id);
        return redirect()->action('Organization\OrganizationController@show', [$id]);
    }

    /**
     * An organization can view recommendations sent to it.
     */
    public function viewRecommendations($id)
    {
        $recommendations = $this->organizationService->viewRecommendations($id);
        if($recommendations)
            return view('organization.recommendation.index', compact('recommendations'));
        return redirect('/');
    }

    /**
     * A volunteer can block an organization to stop receiving notifications.
     */
    public function block($organization_id)
    {
        $this->organizationService->block($organization_id);
        return redirect('/');
    }

    /**
     * A volunteer can unblock an organization.
     */
    public function unblock($organization_id)
    {
        $this->organizationService->unblock($organization_id);
        return redirect('/');
    }

    public function destroy($id)
    {
        $organization = Organization::find($id);
        $organization->delete();
        return redirect('/');
    }
}
