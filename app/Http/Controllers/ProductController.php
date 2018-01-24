<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::paginate(16);

        return view('productList',compact('products'));
    }

    public function showDetail(Product $product)
    {
        return view('detailProduct',compact('product'));
    }
}
