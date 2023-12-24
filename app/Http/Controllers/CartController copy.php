<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __invoke()
    {

    }
    public function addToCart(Product $product)
{

    $cartItems = session()->get('cart', []);


    $cartItems[] = $product;


    session()->put('cart', $cartItems);
    $user = Auth::user();
    $categories = Category::all();
    $products = Product::all();;
    // dd(session()->all());
    return redirect()->route('products.index');
    return view('Web.Layouts.index', compact('user', 'products', 'categories', 'cartItems'));
}


public function removeFromCart(Product $product)
{
    $cartItems = session()->get('cart', []);

    // Find the index of the product in the cart
    $index = array_search($product->id, array_column($cartItems, 'id'));

    // Remove the product from the cart if found
    if ($index !== false) {
        unset($cartItems[$index]);
        $cartItems = array_values($cartItems); // Reset array keys
        session()->put('cart', $cartItems);
    }

    return redirect()->back();
}
}
