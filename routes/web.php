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

Route::resource('/users', 'UserController');
Route::resource('/categories', 'CategoryController');
Route::resource('/products', 'ProductController');
Route::resource('/admin', 'HomeController');
Route::resource('/category', 'CategoryController');
Route::resource('/product', 'ProductController');
