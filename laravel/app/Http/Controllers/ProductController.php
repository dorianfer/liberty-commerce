<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    //
    public function aff(Request $request)
    {
        if (auth()->check()) {
            $id=$request->get('product');
            $product_all = product::where('ID', $id)->get();
            if ($product_all == "[]") {
                return redirect ('/home');
            } else {
                return view('produit')->withProduct($product_all);
            }
        } else {
            return redirect('login');
        }
    }
    public function stock(Request $request)
    {
        $id=$request->get('id');
        \App\product::where('ID', $id)
                ->update(['Stock' => $request->get('stock')]);
        return redirect('/home');
    }
}
