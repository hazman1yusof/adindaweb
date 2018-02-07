<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Auth;

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
        $favourites = [];

        if(!empty($request->productname)){
            $products = $products->where('itemname','like','%'.$request->productname.'%');
        }
        if(!empty($request->productcat)){
            $products = $products->whereIn('productcat',$request->productcat);
        }
        if(Auth::check()){
            $user = Auth::user();

            foreach ($user->favourites()->get() as $key => $value) {
                $favourites = array_add($favourites, $value->product_id, Product::find($value->product_id));
            }
        }

        $products = $products->paginate(16);
        $categories_desc = DB::table('category')->select('catcode','description')->get();

        return view('productList',compact('products','categories_desc','favourites'));
    }

    public function showDetail(Product $product)
    {
        $fave=false;
        if(Auth::check()){
            if(DB::table('favourites')->where('user_id',Auth::user()->idno)->where('product_id',$product->idno)->first()){
                $fave=true;
            }
        }
        $categories_desc = DB::table('category')->select('catcode','description')->get();
        return view('detailProduct',compact('product','categories_desc','fave'));
    }

    public function save_rate(Request $request){
        $product = Product::find($request->idno);
        $rate = intval($request->newrate);
        $oldrate = intval($product->rating);
        $newrate = round(($oldrate+$rate)/2);
        $product = $product->update(['rating' => $newrate]);
    }
}
