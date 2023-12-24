<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function addToFav(Product $product)
{
    $user = Auth::user();
    $client = Client::find($user->userable_id);

    // Check if the record already exists for the given product and client
    $existingFavorite = Favourite::where('client_id', $client->id)
                                 ->where('product_id', $product->id)
                                 ->first();

    if ($existingFavorite) {
        // Delete the existing favorite record
        Favourite::where('client_id', $client->id)
                 ->where('product_id', $product->id)
                 ->delete();
    } else {
        // Create a new Favourite record
        $favourite = new Favourite();
        $favourite->client_id = $client->id;
        $favourite->product_id = $product->id;
        $favourite->save();
    }

    return redirect()->back();
}
}
