<?php

namespace App\Http\Controllers\Web;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\City;
use App\Models\User;
use App\Models\Client;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Models\CityTranslation;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private AuthService $userService)
    {
    }
    public function index()
    {
        $user = Auth::user();
        $products = Product::all()->sortByDesc('created_at');
        $categories = Category::all();
        return view('Web.Layouts.index' , compact('user' , 'products' , 'categories') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = User::all();
        $cities=CityTranslation::all();
        $user_id = $request->input('user_id');
        $user =User::find($user_id);
        $client_id = $request->input('client_id');
        $client = Client::find($client_id);

        return view('Web.Signup', compact('user' , 'client' , 'cities'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SignupRequest $request)
    {
        $userData = $request->validated();
        $clientData = Client::updateOrCreate([
            'gender' => $userData['gender'],
            'age' => $userData['age']
        ]);
        $password = $userData['password'];

        $user = User::updateOrCreate(
            [
                'id' => $request->user_id
            ],
            [
                'userable_type' => Client::class,
                'userable_id' => $clientData->id,
                'email' => $userData['email'],
                'name' => $userData['name'],
                'phone' => $userData['phone'],
                'password'=>bcrypt($password),
                'city_id' => $userData['city_id'],
            ]
        );
        if ($request->hasFile('image')) {
            $user->addMediaFromRequest('image')->toMediaCollection('images');
        }


        if($request->user_id)
            event(new Registered($user));

        $user->touch();
        auth()->login($user);
        return redirect()->route('products.index', 'user');

}
    public function show(string $id)
    {
        $clients = $this->userService->show($id);
        return view('Web.Admin.User.index',compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->userService->destroy($id);
        return redirect()->route('users.index');
    }
    public function search(SearchRequest $request)
    {
        $clients =  $this->userService->search($request->validated());
        $search = $request->search;
        return view('Web.Admin.User.index',compact('clients','search'));
    }
}

         // 'password' => bcrypt($userData['password']),
