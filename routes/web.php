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
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/about', 'WelcomeController@about')->name('about');
Route::get('/service', 'WelcomeController@service')->name('service');
Route::get('/product', 'WelcomeController@product')->name('product');
Route::get('/contact', 'WelcomeController@contact')->name('contact');
Route::get('/cate/{id}', 'WelcomeController@category')->name('cate');


Route::group(['prefix' => 'admin'], function () {

    // Route::resources([
    //     'users' => 'UserController',
    //     'categories' => 'CategoryController',
    //     'products' => 'ProductController',
    //     'home' => 'HomeController',
    //     'category' => 'CategoryController',
    //     'setting' => 'SettingController',
    //     'setting' => 'SettingController',
    //     'service' => 'ServiceController'
    // ]);

    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('home', 'HomeController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('setting', 'SettingController');
    Route::resource('service', 'ServiceController');
    Route::resource('customer', 'CustomerController');
    Route::resource('user', 'UserController');
});
