<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
  use App\Product;

class ProductController extends Controller
{
     //
     public function index()
     {
        //  Productモデルから全データを取得
         $products = Product::get();
        //  dd($products);
         return view('product.index')->with('products',$products);
     }
     
     public function show($id)
     {
         $product = Product::find($id);
         return view('product.show')->with('product',$product);
     }
}