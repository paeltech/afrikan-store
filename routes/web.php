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

Route::get('/', 'ProductsController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::post('/cart/saveForLater/{product}', 'CartController@saveForLater')->name('cart.saveForLater');
Route::delete('/cart{product}', 'CartController@destroy')->name('cart.remove');

Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('wishList.switchToCart');
Route::delete('/saveForLater{product}', 'SaveForLaterController@destroy')->name('wishList.remove');

Route::get('/checkout', 'checkoutController@index')->name('checkout.index');


// Rave pay routes
Route::post('/pay', 'RaveController@initialize')->name('pay');
Route::post('/rave/callback', 'RaveController@callback')->name('callback');

