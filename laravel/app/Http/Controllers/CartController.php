<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function aff_cart(){
        $product = new product();
        $all_cart = $product::all(); 
        return view('cart')->withCart($all_cart);
    }
}
