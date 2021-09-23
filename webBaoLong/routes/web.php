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
//Admin Route
//Route Admin Dashboard

Route::middleware(['auth'])->group(function () {

    Route::get('home_admin', function(){
        return view('admin.layout.home_admin');
    });
    // Route Users
    Route::get('all_users', 'AdminController@getAllUsers')->name('all_users');
    Route::get('create_user', 'AdminController@createUser')->name('create_user');
    Route::get('profile_user', 'AdminController@profileUser')->name('profile_user');
    // Route thư viện
    Route::get('add_gallery', 'AuthController@getGallery')->name('add_gallery');
    //Route Allpages
    Route::get('all_pages', 'AdminController@getAllPages')->name('all_pages');
    Route::get('create_page', 'AdminController@getCreatePage')->name('create_page');
    // Route đơn hàng
    Route::get('all_orders', 'AdminController@getAllOrders')->name('all_orders');
    // Route phản hồi bình luận
    Route::get('all_comments', 'AdminController@getAllComments')->name('all_comments');


    //route get về trang danh sách tin tức
    Route::get ('/news.index', 'NewPostsController@getNews')->name('news.index');
    //route tạo bài viết mới
    Route::get('/news.create', 'NewPostsController@create')->name('news.create');
    //route lưu bài viết vào csdl
    Route::post('/news', 'NewPostsController@storeData')->name('news.storeData');
    //route edit bài viết tìm theo id
    Route::get('/news/{id}/edit', 'NewPostsController@edit')->name('news.edit');
    //route update dữ liệu mới vào csdl
    Route::put('/news/{id}', 'NewPostsController@update')->name('news.update');
    //route xóa bài viết theo id
    Route::delete('/news/{id}', 'NewPostsController@destroy')->name('news.destroy');
    //Route tạo categories cho các bài viết
    Route::get('/news.create_catgr','NewPostsController@create_catgr')->name('news.create_catgr');
    //Lưu categories vào csdl
    Route::post('/news.catgr','NewPostsController@storeCategories')->name('news.storeCategories');
    //route nhóm các bài viết và sản phẩm có cùng category
    Route::get('categories/{id}/news','CategoryController@news');


    //Route Product

    Route::get ('/products.index', 'ProductController@getProduct_admin')->name('products.index');

    Route::get('/products.create_catgr', 'ProductController@create_prd_catgr')->name('products.create_catgr');

    Route::post('/products.catgr', 'ProductController@productCategories')->name('products.storeCategories');

    Route::get ('/products.create','ProductController@create_prd')->name('products.create');

    Route::post('/products', 'ProductController@storeData')->name('products.storeData');

    Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');

    Route::put('/products/{id}', 'ProductController@update')->name('products.update');

    Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');

    Route::get('categories/{id}/products', 'CategoryController@products');
});
//End Route Admin
//===============================================//
//Middleware phân quyền cho các Route
// Route::middleware(['auth'])->group(function () {

    // Route::get('homeLogin', function() {
    //     return view('client.page.homeLogin');
    // });
    // Route::get('homeLogin', 'ProductController@getProduct_Login');
// });


//Route Home page Client
Route::get('home', function() {
    return view('client.page.home');
});

//Route Login, SignUp
Route::get('BaoLong_admin', 'AuthController@geptFormLogin')->name('login.get');
Route::post('login', 'AuthController@submitFormLogin')->name('login.submit');
Route::get('register', 'AuthController@getFormRegister')->name('register.get');
Route::post('register', 'AuthController@submitFormRegister')->name('register.submit');
Route::post('logout', 'AuthController@logout')->name('logout');

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

//Route tính toán đại số ở đây
Route::get('/calculator','CalculatorController@getFormCalculator');
Route::post('/calculator','CalculatorController@storeDataFormCalculate')->name('calculator.calculate');

//=======================================================//


//Route fake dữ liệu news
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
//Route fake dl profile người dùng
Route::get('fake-profile', function(){
    $profile = new \App\Models\Profile_Users;
    $profile->id_code = '001088012336';
    $profile->email = 'badboyszohan@gmail.com';
    $profile->address = '113, ngõ 97 Thái Thịnh, Đống Đa - HN';
    $profile->gender = 1;
    $profile->id_user = 1;

    $profile->save();

});
//Route demo quan hệ 1-1
Route::get('relationship/one-to-one', function(){
    $user = \App\Models\User::find(1);

    echo "Username: {$user->username} <br> ";
    echo "Địa chỉ: {$user->profile->address} <br> ";

});

//demo và các thứ muốn thử
Route::get('/posts', function () {
    return view('posts.index');
});

Route::get ('/demo', function(){

    return view('admin.pages_danh_muc.ProductPages.demo');
});
