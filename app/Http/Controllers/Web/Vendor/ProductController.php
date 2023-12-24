<?php

namespace App\Http\Controllers\Web\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(private ProductService $productService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productService->all();
        return view('Web.Vendor.Product.index', compact('products'));
    }

    public function show($lan, string $id)
    {
        $products = $this->productService->show($id);
        return view('Web.Vendor.Product.index',compact('products'));
    }

    public function create()
    {
        $gategories =Category::get();
        return view('Web.Vendor.Product.create',compact('gategories'));
    }

    public function store(ProductRequest $request)
    {
        $product = $this->productService->store($request->validated());
        if ($request->hasFile('images')) {
            $product->addMultipleMediaFromRequest(['images'])
                    ->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('cover');
            });
        }
        return redirect()->route('vproduct.index');

    }

    public function edit($lan, string $id)
    {
        $products = $this->productService->edit($id);
        $categories = Category::get();
        return view('Web.Vendor.Product.store',compact('products','categories','id'));
    }

    public function update($lan, string $id,ProductRequest $request)
    {
        $product = Product::findOrFail($id);
        if ($request->hasFile('images')) {
            $product->clearMediaCollection('cover');
            $product->addMultipleMediaFromRequest(['images'])
                    ->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('cover');
            });
        }
        $user = $this->productService->update(['id' =>$request->product],$lan,$request->validated());
        return redirect()->route('vproduct.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lan, string $id)
    {
        $this->productService->destroy($id);
        return redirect()->route('vproduct.index');
    }

    public function image($lan, string $id)
    {
        $products = $this->productService->image($id);
        return view('Web.Vendor.Product.add_image',compact('products','id'));
    }

    public function add_image(string $id,Request $request)
    {
        $product = Product::findOrFail($id);
        if ($request->hasFile('images')) {
            $product->addMultipleMediaFromRequest(['images'])
                    ->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('cover');
            });
        }
        return redirect()->route('vproduct.index');
    }
}

