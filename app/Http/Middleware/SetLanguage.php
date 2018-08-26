<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

//        $lang = session()->get('lang');
//        App::setLocale($lang);

//        $locale=Session::get('locale', Config::get('app.locale'));
//        App::setLocale($locale);

        $lang = session()->get('lang');
//        return $lang;
        App::setLocale($lang);
        return $next($request);
    }
}
