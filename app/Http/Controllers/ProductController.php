<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Services\productService;
use App\Models\ProductTranslation;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private productService $productService)
    {
    }
    public function index(Request $request)
    {
        // dd($products);/Users/anas/Desktop/final/ecommerce
        $products = $this->productService->searchAndFilter($request);
        $user = Auth::user();
        $categories = Category::all();

        return view('Web.Layouts.index', compact('user', 'products', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Web.product.create');
    }

    public function upload(Request $request,Product $product){
        if($request->has('image')){
            $product->addMedia($request->image)->toMediaCollection();
        }
        return redirect()->back();
    }





    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        $product = $this->productService->store($data);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $product->addMediaFormRequest($image)
                ->preservingOriginal()
                ->toMediaCollection('image');
        }

        // if($request->hasFile('image') && $request->file('image')->isValid()){
        //     $product->addMediaFromRequest('image')->toMediaCollection('images');
        // }
        if ($product) {
            return view('Web.index',['products'=>$product,'image'=>$product]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $product)
    {
        $product = Product::find($product);

        $product_id = $product->id;

       $reviews = $this->productService->review($product_id);
       $rate = $this->productService->productRate($product_id);
        $rate = round($rate, 1);
       $options = $this->productService->value($product_id);
        $user=Auth::user();
        $categories = Category::all();
        $cities = City::all();
        return view('Web.Components.productDetails' , compact('product' , 'user' , 'categories' , 'cities' , 'reviews' , 'rate' , 'options'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=Product::findOrFail($id);
        return view('Web.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request,$id)
    {
        $data = $request->validated();
        $lan = $locale = app()->getLocale();
        $product = $this->productService->update($id,$lan,$data);

        return view('Web.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,$id)
    {
        //$product=$this->productService->delete();
    }
}
