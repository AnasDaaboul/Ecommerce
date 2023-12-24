<?php

namespace App\Services;

use App\Models\User;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Option;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\ProductTranslation;
use Illuminate\Support\Facades\DB;

class ProductService
{

    public function all()
    {
        $vendor = User::where('id',Auth()->user()->id)->with('userable')->first();
        $products = Product::where('vendor_id',$vendor->userable_id)->with(['media'])->with('categories')->orderByDesc('created_at')->paginate(5);
        return $products;
    }

    // public function update($id ,array $data)
    // {
    //     User::findOrFail($id)->first()->fill($data)->save();
    //     // User::findOrFail($id)->update($data);
    // }

    public function show(string $id)
    {
        $product = Product::whereId($id)->paginate(1);
        return $product;
    }


    public function review(string $product)
    {
        $product = Product::find($product);
        $reviews = Review::join('users', 'reviews.client_id', '=', 'users.id')
    ->leftJoin('likes', 'likes.review_id', '=', 'reviews.id')
    ->where('reviews.reviewsable_id', $product->id)
    ->select('reviews.id', 'reviews.comment', 'reviews.rate', 'users.name as client_name', DB::raw('COUNT(likes.id) as likes_count'))
    ->groupBy('reviews.id', 'reviews.comment',  'reviews.rate' , 'users.name' )
    ->get();
    return $reviews;
    }

    public function edit(string $id)
    {
        $product=Product::Where('id',$id)->get();
        return $product;
    }

    public function store(array $data)
    {
        $user = User::whereId(auth()->user()->id)->first();
        $id = $user->userable_id;

        $product = Product::create([
            'price' => $data['price'],
            'discount' => $data['discount'],
            'dis_amount' => $data['dis_amount'],
            'vendor_id' => $id,
        ]);
        foreach($data['category_id'] as $categoryId)
        {
            CategoryProduct::create([
                'product_id' => $product -> id,
                'category_id' => $categoryId,
            ]);
        }
        $lang=['en','ar'];
        foreach($lang as $products)
        {
            ProductTranslation::create([
                'name' => $data['name_'.$products],
                'title' => $data['title_'.$products],
                'description' => $data['description_'.$products],
                'product_id' => $product -> id,
                'locale' => $products,

            ]);
        }
        // $product->addMediaFromRequest($data['image'])->toMediaCollection('cover');
        return $product;

    }

    public function update($id,$lan, array $data)
    {
        $name = 'name_'.$lan;
        $title = 'title_'.$lan;
        $description = 'description_'.$lan;
        $product = Product::updateOrCreate(['id' => $id], [
            'name' => $data[$name],
            'title' => $data[$title],
            'description' => $data[$description],
            'price' => $data['price'],
            'discount' => $data['discount'],
            'dis_amount' => $data['dis_amount'],
        ]);
        // $product->addMediaFromRequest($data['image'])->toMediaCollection('cover');
        return $product;

    }

    public function orders()
    {
        $orders = Order::orderByDesc('created_at')->paginate();
        return $orders;
    }

    public function products()
    {
        $products = Product::with('vendor')->orderByDesc('created_at')->paginate();
        return $products;
    }

    public function destroy(string $id)
    {
        Product::where('id',$id)->delete();
    }

    public function image(string $id)
    {
        $product = Product::whereId($id)->first();
        return $product;
    }

    public function productRate(string $product)
    {
        $product = Product::find($product);
        $totalRating = Review::where('reviewsable_id', $product->id)
        ->where('reviewsable_type', 'product')
        ->sum('rate');
        $totalReviews = Review::where('reviewsable_id', $product->id)
        ->where('reviewsable_type', 'product')
        ->count();
         return $total = $totalRating/$totalReviews;

    }

    public function searchAndFilter(Request $request)
    {


        $query = ProductTranslation::query();
        $CategoryQuery = Product::query();
        if (request()->filled('search')) {
            $search = request()->search;

            $query->where("name", 'LIKE', '%' . $search . '%')
                ->orWhere("description", 'LIKE', '%' . $search . '%')
                ->orWhere("title", 'LIKE', '%' . $search . '%');
                // dd($query);
        }


        if (request()->filled('category_id')) {
           $categoryId = request()->category_id;
           $productIds = DB::table('category_product')
           ->where('category_id', '=', $categoryId)
           ->pluck('product_id');
           $CategoryQuery = Product::whereIn('id', $productIds)->get();




       }
       // ------------------PRODUCT SEARCH----------------------------//
       $products = $query->orderBy('created_at', 'desc')->get();

//------------------------------------------------------------//

// ------------------PRODUCT FILTER----------------------------//
$categoryProducts = Category::find($categoryId)->products()
->orderBy('created_at', 'desc')
->get();

// ------------------PRODUCT FILTER----------------------------//
$intersection = $products->intersect($categoryProducts);
        $products =Product::find($intersection);
        return $products;


}
public function value(string $product)
    {
        $product = Product::find($product);
        $product_id = $product->id;

        $options = Option::with(['value_options' => function($query) use ($product_id) {
            $query->where('product_id', $product_id);
        }])->get();

        return $options;
    }
}
