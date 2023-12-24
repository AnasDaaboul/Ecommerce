<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\Models\Client;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create(ReviewRequest $request)
{
    $reviewData = $request->validated();
    $user = Auth::user();
    $client = Client::find($user->userable_id);
    $client_id = $client->id;

    $reviewData['client_id'] = $client_id;

    $reviewAttributes = [
        'comment' => $reviewData['comment'],
        'rate' => $reviewData['rate'] ?? null,
        'reviewsable_id' => $reviewData['reviewsable_id'],
        'client_id' => $client_id,
        'reviewsable_type' => 'product',
    ];

    if (isset($reviewData['review_id'])) {
        $reviewAttributes['review_id'] = $reviewData['review_id'];
    }

    $review = Review::create($reviewAttributes);

    return redirect()->back();
}
}
