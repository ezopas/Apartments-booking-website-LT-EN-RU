<?php

namespace App\Http\Controllers;
use Session;
use URL;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLocale($locale){
//        if (!in_array($locale, ['en', 'ru', 'lt'])){
//            $locale = 'en';
//        }
        Session::put('locale', $locale);
        return redirect(url(URL::previous()));
    }

    public function en (){
        //session(['locale' => 'en']);
        //Session::set('locale', 'en');
        App::setLocale(en);
        return back();
    }
    public function lt (){
        //Session::set('locale', 'lt');
        session(['locale' => 'lt']);
        return back();
        //return Redirect::back();
    }
}
