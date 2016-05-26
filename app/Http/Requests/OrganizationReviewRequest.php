<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class OrganizationReviewRequest extends Request
{

    /**
     * A volunteer can't write more than one review
     * TODO: allow volunteer to edit his/her review
     */
    public function authorize()
    {
        $organization_id = $this->route()->getParameter('id');
        return !Auth::user()->organizationReviews()
                            ->where('organization_id', $organization_id)->first();
    }

    public function rules()
    {
        return [
            'rating'   => 'required|numeric|min:1|max:5',
            'review' => 'required'
        ];
    }
}
