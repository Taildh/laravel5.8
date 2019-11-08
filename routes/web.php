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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => 'admin'], function () {
    Route::get('products', 'ProductController@index');
	Route::get('products/add','ProductController@index');

});

// <LOGIN> 
Route::get('sign-up', 'HomeController@signUp')->name('sign-up');
Route::post('sign-up', 'HomeController@postSignUp');
Route::get('login', 'HomeController@login')->name('login');
Route::post('login','HomeController@postLogin');



// </LOGIN>
Route::get('/', 'HomeController@index')->name('home');
Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
Route::get('/brands/{url}', 'HomeController@brands')->name('brands');
Route::get('/categories/{url}', 'HomeController@categories')->name('categories');