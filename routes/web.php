<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');;
Route::get('/about', 'AboutController@index');
Route::get('/login', 'SessionController@index')->name('login');
Route::post('/login', 'SessionController@login');
Route::get('/signup', 'SessionController@show_signup');
Route::post('/signup', 'SessionController@signup');
Route::get('/logout','SessionController@destroy');
Route::get('/product', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@showDetail');
Route::get('/cart', 'CartController@index');
Route::get('/cart_detail', 'CartController@detail');
Route::get('/shipping', 'ShippingController@index');
Route::get('/confirm_order', 'ConfirmOrderController@index');
Route::get('/payment', 'PaymentController@index');
Route::get('/favourite', 'FavouriteController@index');
Route::post('/favourite', 'ProductController@store');
Route::post('/save_rate', 'ProductController@save_rate');