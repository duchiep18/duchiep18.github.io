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
//admin Route
//Route Admin Dashboard
    Route::get('xuepc_admin', function(){
        return view('admin.layout.home_admin');
    });
    //Route NewS 
    Route::get ('/news.index', 'PostController@getNews')->name('news.index');
    Route::get('/news.create', 'PostController@create')->name('news.create');
    Route::post('/news', 'PostController@storeData')->name('news.storeData');

    Route::get('/news/{id}/edit', 'PostController@edit')->name('news.edit');
    Route::put('/news/{id}', 'PostController@update')->name('news.update');
    Route::delete('/news/{id}', 'PostController@destroy')->name('news.destroy');

    //Route Product
    Route::get ('/products.index', 'ProductController@getProduct_admin')->name('products.index');
    Route::get ('/products.create','ProductController@create')->name('products.create');
    Route::post('/products', 'ProductController@storeData')->name('products.storeData');

    Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('/products/{id}', 'ProductController@update')->name('products.update');
    Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
//End Route Admin

//Route Home page
Route::get('home', function() {
    return view('client.page.home');
});

//Route Login, SignUp
Route::get('login',function(){
    return view('client.page.login');
});

Route::get('login-form', 'LoginController@getFormLogin');

Route::post('signup-form-submit', 'SignUpController@submitFormSignUp');
//Route Product
Route::get('home', 'ProductController@getProduct');

//Route Shop
Route::get('/shop',function(){
    return view('client.products.ShopProducts');
});

//Route cart
Route::get('cart',function(){
    return view('client.cart-payment.cart');
});

Route::get('checkout',function(){
    return view('client.cart-payment.checkout'); 
});
Route::get('contact_us',function(){
    return view('client.page.contactus');
});


Route::get('/posts', function () {
    return view('posts.index');
});

Route::get ('/demo', function(){

    return view('admin.pages_danh_muc.ProductPages.demo');
});

Route::get('/calculator','CalculatorController@getFormCalculator');
Route::post('/calculator','CalculatorController@storeDataFormCalculate')->name('calculator.calculate');
