<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;

use App\Http\Requests\OrganizationReviewRequest;
use App\Http\Services\OrganizationReviewService;

use App\Organization;
use App\OrganizationReview;
use App\Notification;
use Auth;

class OrganizationReviewController extends Controller
{
  private $organizationReviewService;
    public function __construct()
    {
      $this->organizationReviewService = new OrganizationReviewService();
        $this->middleware('auth_volunteer', ['only' => [
            'create', 'store', 'edit', 'update', 'report'
        ]]);

        $this->middleware('auth_validator', ['only' => ['destroy']]);
    }

    /**
     * Show all reviews of a certain organization.
     */
    public function index($id)
    {
        $organization = Organization::findorfail($id);
        return view('organization.review.index', compact('organization'));
    }

    /**
     * Show a certain organization review.
     */
    public function show($organization_id, $review_id)
    {
        //TODO
    }

    /**
     * Create a new organization review.
     */
    public function create($id)
    {
        $organization = Organization::findorfail($id);
        return view ('organization.review.create', compact('organization'));
    }

    /**
     * Store the created organization review.
     */
    public function store(OrganizationReviewRequest $request, $id)
    {
        $this->organizationReviewService->store($request, $id);
        return redirect()->action('Organization\OrganizationController@show', [$id]);
    }

    /**
     * Edit an organization review.
     */
    public function edit($organization_id, $review_id)
    {
        //TODO
    }

    /**
     * Update the edited organization review
     */
    public function update($organization_id, $review_id)
    {
        //TODO
    }

    /**
     * Delete an organization review
     */
    public function destroy($organization_id, $review_id)
    {
        $organization = Organization::findOrFail($organization_id);
        $review = $organization->reviews()->findOrFail($review_id);
        $volunteer = $review->user()->get();
        $review->delete();

        Notification::notify($volunteer,7, null,
                    "your review on organization: ". $organization->name." has been deleted", "/organization/".$organization_id);

        return redirect()->action('Organization\OrganizationController@show', [$organization_id]);
    }

    public function report($organization_id, $review_id)
    {
        $this->organizationReviewService->report($organization_id,$review_id);
        return redirect()->action('Organization\OrganizationController@show', [$organization_id]);
    }

}
