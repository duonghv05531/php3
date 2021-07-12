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

// use Illuminate\Routing\Route;

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/about', 'WelcomeController@about')->name('about');
Route::get('/service', 'WelcomeController@service')->name('service');
Route::get('/product', 'WelcomeController@product')->name('product');
Route::get('/contact', 'WelcomeController@contact')->name('contact');




Route::resource('admin/users', 'UserController');
Route::resource('admin/categories', 'CategoryController');
Route::resource('admin/products', 'ProductController');
Route::resource('admin/home', 'HomeController');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/product', 'ProductController');
Route::resource('admin/setting', 'SettingController');
Route::resource('admin/service', 'ServiceController');
