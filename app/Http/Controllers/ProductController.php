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
    public function index(Request $request)
    {   
        $products = new Product;
        if(!empty($request->productname)){
            $products = $products->where('itemname','like','%'.$request->productname.'%');
        }
        // dd($products->toSql());
        // dd($products->getBindings());
        $products = $products->paginate(16);


        return view('productList',compact('products'));
    }

    public function showDetail(Product $product)
    {
        return view('detailProduct',compact('product'));
    }
}
