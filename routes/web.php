<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
    return view('main');
});

Auth::routes();

Route::get('/', 'MainController@index')->name('main');
Route::get('/product/{product}', 'MainController@product')->name('product');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/category/{category}', 'MainController@category')->name('category');
Route::get('/basket', 'MainController@basket')->name('basket')->middleware('auth');
Route::get('/orders', 'MainController@orders')->name('orders');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/order/{product}', 'OrderController@showOrderForm')->name('order');
Route::post('/order/{product}', 'OrderController@addOrder')->name('order');

Route::get('/editCategory/{category}', 'CategoryController@edit')->name('editCategory');
Route::post('/editCategory/{category}', 'CategoryController@save')->name('editCategory');
Route::get('/deleteCategory/{category}', 'CategoryController@delete')->name('deleteCategory');
Route::get('/addCategory/', 'CategoryController@showAddForm')->name('addCategory');
Route::post('/addCategory/', 'CategoryController@add')->name('addCategory');

Route::get('/addProduct/', 'ProductController@showAddProductForm')->name('addProduct');
Route::post('/addProduct/', 'ProductController@add')->name('addProduct');
Route::get('/deleteProduct/{product}', 'ProductController@delete')->name('deleteProduct');
Route::get('/editProduct/{product}', 'ProductController@showEditForm')->name('editProduct');
Route::post('/editProduct/{product}', 'ProductController@edit')->name('editProduct');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
