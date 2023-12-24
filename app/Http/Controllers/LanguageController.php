<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangeLanguageRequest;

class LanguageController extends Controller
{
    public function __invoke(ChangeLanguageRequest $request)
    {

        session()->put('locale', $request->locale);
        return redirect()->route('users.index');
    }
}
