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

    public function signup()
    {
        return view('signup');
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
        $user =  $user->where('username',request('username'))
                    ->where('password',request('password'))
                    ->where('email',request('email'))
                    ->first();
        if($user){
            Auth::login($user);
            $request->session()->put('admin', $admin);
            $request->session()->put('username', request('username'));
            return redirect('/product');
        }else{
            return back();
        }
    }

    public function destroy(){
        Session::flush();
        return redirect('/login');
    }
}
