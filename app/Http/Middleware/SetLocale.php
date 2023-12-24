<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->segment(1);
        if($lang == 'en' || $lang == 'ar')
            App::setLocale($lang);
        else
            \abort(404);
        URl::defaults(['locale' => app()->getLocale()]);
        // app()->setLocale(session()->get('locale', 'en'));
        return $next($request);
    }
}
