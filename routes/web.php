<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\Admin\AdminController;
use App\Http\Controllers\Web\Admin\UserController as AdminUserController;
use App\Http\Controllers\Web\Vendor\InformationController;
use App\Http\Controllers\Web\Admin\VendorController;
use App\Http\Controllers\Web\Vendor\CategoryController;
use App\Http\Controllers\Web\Vendor\OptionController;
use App\Http\Controllers\Web\Vendor\ProductController as VendorProductController;
use App\Http\Controllers\Web\Vendor\ValueOptionController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Web\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes(['verify'=>true]);

Route::group([
    'prefix' => '{locale?}',
    'where' => ['lang' => '[a-zA-Z]{2}'],
    'middleware' => 'setLocale'
], function() {

    Route::middleware(['auth','role:admin','verified'])->prefix('admin')->group(function () {
        Route::resource('profile', AdminController::class);
        Route::resource('vendors', VendorController::class);
        Route::get('/vendor',[VendorController::class,'search']);
        Route::resource('user', AdminUserController::class);
        Route::get('/client',[AdminUserController::class,'search']);
        Route::get('/orders',[AdminController::class,'orders'])->name('orders');
        Route::get('/products',[AdminController::class,'products'])->name('products');
    });

    Route::middleware(['auth','role:vendor','verified'])->prefix('vendor')->group(function () {
        Route::resource('/information', InformationController::class);
        Route::resource('vproduct', VendorProductController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('options', OptionController::class);
        Route::resource('value_option', ValueOptionController::class);
        Route::get('/add_image/{id}',[VendorProductController::class,'image'])->name('image');
        Route::post('/add_image/{id}',[VendorProductController::class,'add_image'])->name('add_image');

    });
});

Route::get('/', function () {
    $user = Auth::user();
    return view('Web.Layouts.index' , compact('user') );
})->name('products.index')->middleware(['auth','verified']);


Route::group(['middleware' => 'guest'] , function()
    {
        Route::post('/login', [AuthController::class, 'checklogin'])->name('checklogin');
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
        Route::post('signup', [AuthController::class, 'register'])->name('register');
        Route::post('users/create', [UserController::class, 'store'])->name('users.store')->middleware('web');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    });

    Route::group(['middleware' => 'auth.basic'] , function()
    {
        Route::post('logout', [AuthController::class, 'destroy'])->name('logout');

        Route::get('logout', [AuthController::class, 'logout'])->name('getlogout');
    });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','Locale','role:client','verified'])->group(function () {
    Route::get('/' , [UserController::class , 'index'])->name('products.index');

    Route::resource('users', UserController::class)->except(['create' , 'store']);

    Route::get('/products' , [ProductController::class , 'index'])->name('products_search');
    Route::get('/product/{product}' , [ProductController::class , 'show'])->name('product-details');
    Route::resource('product',ProductController::class)->except(['index' , 'show']);

    Route::post('/swap-lang', LanguageController::class)->name('swap-lang');

    // Route::post('/add-to-cart/{product}', CartController::class , 'addToCart')->name('cart.add');
    Route::post('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/{product}', [CartController::class,'removeFromCart'])->name('cart.remove');

    Route::post('/add-to-fav/{product}' , [FavoriteController::class , 'addToFav'])->name('fav.add');
    Route::post('/like/{review_id}', [LikeController::class, 'addLike'])->name('like');
    Route::post('/review/{product}', [ReviewController::class, 'create'])->name('add-review');
});





// Route::post('/login', [AuthController::class, 'checklogin'])->name('checklogin');
// Route::get('login', [AuthController::class, 'login'])->name('login');


