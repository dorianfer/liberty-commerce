<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\list_product;
use App\product;

class AdminController extends Controller
{
    public function adm()
    {
        if((\Auth::user()->Admin) == '0') {
            return redirect ('/home');
         } else {
            return view('auth.admin');
         }
    }
    public function ajout(Request $request)
    {
        $this->validate($request, [
            'itemname' => ['required'],
            'description' => ['required'],
            'category' => ['required', 'max:45'],
            'price' => ['required', 'integer'],
            'stock' => ['required', 'integer'],
            'image' => ['required', 'max:255'],
        ]);
        $product = new product;
        $product->Price = $request->get('price');
        $product->Category = $request->get('category');
        $product->Description = $request->get('description');
        $product->Picture = $request->get('image');
        $product->Title = $request->get('itemname');
        $product->Stock = $request->get('stock');
        $product->save();
        return redirect('home');

    }
}