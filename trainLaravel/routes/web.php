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
    Route::get('/news.create_catgr','PostController@create_catgr')->name('news.create_catgr');
    Route::post('/news.catgr','PostController@storeCategories')->name('news.storeCategories');
    Route::get('/news/{id}/edit', 'PostController@edit')->name('news.edit');
    Route::put('/news/{id}', 'PostController@update')->name('news.update');
    Route::delete('/news/{id}', 'PostController@destroy')->name('news.destroy');

    //Route Product
    Route::get ('/products.index', 'ProductController@getProduct_admin')->name('products.index');
    Route::get('/products.create_catgr', 'ProductController@create_prd_catgr')->name('products.create_catgr');
    Route::post('/products.catgr', 'ProductController@productCategories')->name('products.storeCategories');
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

Route::get('fake_du_lieu_news', function(){
    for ($i=0; $i < 113 ; $i++) { 
        $new = new \App\Models\News;
        $new->title = 'Tất tần tật về siêu phẩm Intel thế hệ thứ 10';
        $new->description = 'Review siêu phẩm Intel Core i3 10100f';
        $new->content = 'Intel Core i3 thế hệ thứ 8 có thông số 4 nhân 4 luồng, cho tốc độ xung nhịp lên tới 4GHz, giúp máy tính của bạn làm được nhiều việc, xử lý nhiều tác vụ cùng một lúc, Cùng với 8MB Smart cache đã góp phần nâng cao sức mạnh xử lý. 
        Ngoài ra một số phiên bản Core i3 thế hệ thứ 8 còn được trang bị công nghệ Intel Turbo Boost thường thấy ở các dòng i5, i7 (ở tác vụ thông thường sẽ chạy tốc độ thấp để tiết kiệm pin và tăng xung nhịp xử lý ở các tác vụ nặng).
        Và đặc biệt, trong lần ra mắt gần đây, Intel đã cho thấy những bộ vi xử lý Core I3 của họ có khả năng tạo nên nhiều sự khác biệt. Core i3 thế hệ thứ 10 sẽ có 4 nhân 8 luồng tương đương sức mạnh của dòng Core i7 thế hệ thứ 7. Các vi xử lý mới đạt
        tốc độ xung nhịp cao hơn hờ các công nghệ mới như Turbo Boost 3.0, siêu phân luồng HyperThreading và Thermal Velocity Boost giúp CPU đạt được mức xung nhịp vô cùng ấn tượng nếu điều kiện cho phép.';
        $new->created_at;
        $new->updated_at;
        $new->save();
    }

});