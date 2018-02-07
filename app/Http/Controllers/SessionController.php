<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use DB;
use Auth;
use Hash;
use Session;

class SessionController extends Controller
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
        return view('login');
    }

    public function show_signup()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            're_password' => 'required|same:password',
            'f_name' => 'required',
            'l_name' => 'required',
            'address' => 'required',
            'postcode' => 'required|digits:5',
            'city' => 'required',
            'province' => 'required',
            'mobile_nm' => 'required|digits_between:8,20'
        ]);

        $id = DB::table('users')->insertGetId([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'province' => $request->province,
            'mobile_nm' => $request->mobile_nm
        ]);

        $user=User::find($id);

        Auth::login($user);
        $request->session()->put('admin', 'no');
        $request->session()->put('username', request('username'));
        return redirect('/product');
    }

    public function login(Request $request)
    {   
        if(!empty($request->admin)){
            $user = new Admin;
            $admin = 'yes';
        }else{
            $user = new User;
            $admin = 'no';
        }
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')], request('remember'))) {
            return redirect('/product');
        }else{
            return back();
        }
    }

    public function destroy(){
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
