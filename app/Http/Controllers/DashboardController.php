<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Page;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $apartments = Apartment::all();
        $pages = Page::all();

        $data = ['apartments' => $apartments, 'pages' => $pages];

        return view('pages.dashboard')->with($data);

        //return view('pages.dashboard', compact('data'));

//        $data = ['apartment' => $apartment, 'allapartments' => $allapartments];
//
//        return view('pages.apartment')->with($data);
    }
}
