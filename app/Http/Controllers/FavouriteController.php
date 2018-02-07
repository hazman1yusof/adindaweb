<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Auth;

class FavouriteController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {   

    	$user = Auth::user();
    	$products = [];
    	$favourites = [];

    	foreach ($user->favourites()->get() as $key => $value) {
    		$products = $favourites = array_add($products, $value->product_id, Product::find($value->product_id));
    	}

        $categories_desc = DB::table('category')->select('catcode','description')->get();

        return view('favourite',compact('products','categories_desc','favourites'));
    }

    public function store(Request $request){
        $product = Product::find($request->idno);
        $rate = intval($request->newrate);
        $oldrate = intval($product->rating);
        $newrate = round(($oldrate+$rate)/2);
        $product = $product->update(['rating' => $newrate]);
    }
}
