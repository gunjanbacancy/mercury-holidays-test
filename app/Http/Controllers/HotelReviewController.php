<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelReview;
use Validator;
use App\Http\Controllers\BaseController as BaseController;

class HotelReviewController extends BaseController
{
    /**
     * Add review in hotel
     * 
     * @param  \Illuminate\Http\Request  $request 
     * @param  int $hotel_id 
     * @return Illuminate\Http\JsonResponse
     */

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'hotel_id' => 'required|numeric',
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'required|string'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $review_create = HotelReview::create($input);
        return $this->sendResponse($review_create->toArray(), 'Successfully submit hotel review.');
    }
}
