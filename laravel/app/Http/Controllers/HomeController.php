<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $product = new product();
        $all_product = $product::all();
        return view('home')->withProduct($all_product);
    }
}
