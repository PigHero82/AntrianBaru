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

############################################################################

// Authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

############################################################################

// Counter
Route::get('/counter', function () {
    return view('login.counter');
});

############################################################################

// Administrator
// Admin
Route::resource('/administrator', 'AdminController');
Route::resource('/submerchant', 'SubmerchantController');
Route::get('/adminn', function () {
    return view('admin.admin');
});

//Merchant
Route::resource('/adminmerchant', 'MerchantController');

############################################################################

//Front
Route::get('/', 'FrontController@index');
Route::get('/merchant/{id}', 'FrontController@show')->name('show.antrian');
Route::post('/merchant', 'FrontController@store')->name('store.antrian');

############################################################################

//Tes Role
Route::get('/abc', 'adminController@index');
// Route::get('/merchant/{id}', 'FrontController@show')->name('show.antrian');
// Route::post('/merchant', 'FrontController@store')->name('store.antrian');

############################################################################

// Template
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product-single', function () {
    return view('product-single');
});
Route::get('/shop', function () {
    return view('shop');
});
// Route::get('/', function () {
//     return view('index');
// });

############################################################################