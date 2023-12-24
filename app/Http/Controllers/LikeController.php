<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function addLike($review_id)
    {
        $user = Auth::user();
        $client = Client::find($user->userable_id);

        $existingLike = Like::where('likeable_id', $client->id)
                                 ->where('review_id', $review_id)
                                 ->first();
        if($existingLike)
        {
            Like::where('likeable_id', $client->id)
            ->where('review_id', $review_id)
            ->delete();
        }
        else{
        $like = new Like();
        $like->review_id = $review_id;
        $like->likeable_id = $client->id;
        $like->likeable_type = 'client';
        $like->save();}
        return redirect()->back();

    }
}
