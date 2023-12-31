<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //default bahasa indo tapi ditulis en
        $language = 'en';

        if(request('language')){
            $language = request('language');
            session()->put('language', $language);
        }elseif (session('language')) {
            $language = session('language');
        }
        app()->setLocale($language);

        return $next($request);

    }
}
