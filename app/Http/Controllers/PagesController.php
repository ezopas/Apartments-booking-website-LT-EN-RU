<?php

namespace App\Http\Controllers;

use App\Page;
use App\Apartment;
use App;
//use Session;
//use URL;

class PagesController extends Controller
{
    public function __construct()
    {
        $lang = session()->get('lang');
        App::setLocale($lang);
        //echo $lang;
//        return $lang;
    }

    public function index($lang){
        //$lang = session()->get('lang');
        //App::setLocale($lang);

//        if(!$lang){App::setLocale(en);}
//        App::setLocale($lang);

//        return $lang;
        if( $lang === null ){
            App::setLocale('lt');
        }else{
            App::setLocale($lang);
        }

        $apartments = Apartment::all();
        return view('pages.index', compact('apartments'));
    }

    public function aboutus(){

        $page = Page::find(1);

        return view('pages.pagetemplate')->with('page', $page);
    }

    public function privacypolicy($lang){

        if( $lang === null ){
            App::setLocale('lt');
        }else{
            App::setLocale($lang);
        }

        $page = Page::find(2);

        return view('pages.pagetemplate')->with('page', $page);
    }

    public function ourscore(){

        $page = Page::find(3);

        return view('pages.pagetemplate')->with('page', $page);
    }
}
