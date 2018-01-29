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
        $categories_desc = DB::table('category')->select('catcode','description')->get();
        return view('cart',compact('categories_desc'));
    }

    public function detail(Request $request)
    {      
        $cart = array();
        $quantity_arr = array_pluck($request->cart, 'quan');
        $idno_arr = array_pluck($request->cart, 'idno');

        foreach (DB::table('product')->whereIn('idno',$idno_arr)->get() as $key => $obj) {
            $key_arr = array_search($obj->idno, $idno_arr);
            $quantity = $quantity_arr[$key_arr];

            $obj->quantity =$quantity;
            $obj->image = Product::find($obj->idno)->first_image()->first()->image_url;
            $cart[$key] = $obj;
        }

        return $cart;

    }
}
