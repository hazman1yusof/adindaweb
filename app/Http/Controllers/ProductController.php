<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

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
        // dd($request->productcat);
        $products = new Product;
        if(!empty($request->productname)){
            $products = $products->where('itemname','like','%'.$request->productname.'%');
        }
        if(!empty($request->productcat)){
            $products = $products->whereIn('productcat',$request->productcat);
        }
        // dd($products->toSql());
        // dd($products->getBindings());
        $products = $products->paginate(16);
        $categories_desc = DB::table('category')->select('catcode','description')->get();


        return view('productList',compact('products','categories_desc'));
    }

    public function showDetail(Product $product)
    {
        $categories_desc = DB::table('category')->select('catcode','description')->get();
        return view('detailProduct',compact('product','categories_desc'));
    }
}
