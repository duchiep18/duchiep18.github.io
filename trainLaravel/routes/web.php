<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', function() {
    return view('client.page.home');
});

Route::get('login',function(){
    return view('client.page.login');
});

Route::get('login-form', 'LoginController@getFormLogin');

Route::get('login-form-submit', 'LoginController@submitFormLogin');

Route::get('cart',function(){
    return view('client.cart-payment.cart');
});
Route::get('checkout',function(){
    return view('client.cart-payment.checkout'); 
});
Route::get('contact_us',function(){
    return view('client.page.contactus');
});

Route::get('/products',function(){
    return view('client.products.ProductDetails');
});

Route::get('/shop',function(){
    return view('client.products.ShopProducts');
});

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@storeData')->name('posts.storeData');

Route::get('/calculator','CalculatorController@getFormCalculator');
Route::post('/calculator','CalculatorController@storeDataFormCalculate')->name('calculator.calculate');
