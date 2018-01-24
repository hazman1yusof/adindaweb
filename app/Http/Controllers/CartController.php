<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class CartController extends Controller
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
        return view('cart');
    }

    public function detail(Request $request)
    {      
        $cart = array();
        
        foreach (DB::table('product')->whereIn('idno',$request->cart)->get() as $key => $obj) {
            $obj->image = Product::find($obj->idno)->first_image()->first()->image_url;
            $cart[$key] = $obj;
        }

        return $cart;

    }
}
