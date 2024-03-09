<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
  {

        return view('product');
    }
    public function addProduct(Request $request){
     $request->validate([
        'name'=>'required',
        'price'=>'required',
     ],
     [
        'name.required'=>'name is requird',
        'price.required'=>'price is requird',
     ]
    );
      $product = new Product();
    $product->name = $requset->name;
   $product->price = $requset->price;
   $product->save();
//    return redirect()->back()->with('success','product added successfully');
    }
}