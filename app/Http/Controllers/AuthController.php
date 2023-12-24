<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SignupRequest;
use App\Models\City;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    public function __construct(private AuthService $authService)
    {
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function login(){
        return view('Web.login');
    }

    public function checklogin(LoginRequest $request)
    {
        $credentials =[
            'email' => $request->email,
            'password'=> $request->password,];

            if(Auth::attempt($credentials))
            {
                $user = Auth::user();
                if($user -> userable_type =='admin')
                {
                    App::setLocale('en');
                    URL::defaults(['locale' => app()->getLocale()]);

                    return redirect()->route('profile.index');
                }
                else if($user -> userable_type =='vendor')
                {
                    App::setLocale('en');
                    URl::defaults(['locale' => app()->getLocale()]);
                    return redirect()->route('information.index');
                }
                else
                    return redirect()->route('products.index' , compact('user'));
            }
            return redirect()->back()->withErrors([
                'email' => 'The provided email do not match our records.',
                'password' =>"Your password is incorrct",
            ]);
        Auth::logout(Auth::user());
        return redirect()->route('products.index');
    }

    public function signup()
    {
        $cities =City::get();
        return view('Web.Signup' ,compact('cities'));
    }

    public function register(SignupRequest $request)
    {
        $user = $this->authService->client($request->validated());
        if ($request->hasFile('image'))
            $user->addMediaFromRequest('image')->usingName($user->userable_type)->toMediaCollection('profile');
        if ($user) {
            return redirect()->route('products.index');
        }
        return redirect()->route('products.index' , 'user');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/login');
    }
}

