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

Route::get('/', 'HomeController@dash');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){

    Route::prefix('unit')->group(function(){
        Route::get('/Manage-category', 'UnitController@index')->name('manage-cat');
        Route::get('/add-category', 'UnitController@create')->name('add-cat');
        Route::post('/store-category', 'UnitController@store')->name('store-cat');
        // Route::get('/show-category/{id}', 'UnitController@show')->name('show-cat');
        Route::get('/edit-category/{id}', 'UnitController@edit')->name('edit-cat');
        Route::post('/update-category/{id}', 'UnitController@update')->name('update-cat');
        Route::get('/delete-category/{id}', 'UnitController@destroy')->name('delete-cat');
    });

    Route::prefix('product')->group(function(){
        Route::get('/Manage-flower', 'ProductController@index')->name('manage-flow');
        Route::get('/add-flower', 'ProductController@create')->name('add-flow');
        Route::post('/store-flower', 'ProductController@store')->name('store-flow');
        // Route::get('/show-flower/{id}', 'ProductController@show')->name('showflow');
        Route::get('/edit-flower/{id}', 'ProductController@edit')->name('edit-flow');
        Route::post('/update-flower/{id}', 'ProductController@update')->name('update-flow');
        Route::get('/delete-flower/{id}', 'ProductController@destroy')->name('delete-flow');
    });

    Route::prefix('cart')->group(function(){
        Route::get('/my-cart', 'CartController@index')->name('index-cart');
        Route::post('/add-to-cart', 'CartController@add')->name('add-cart');
        Route::post('/update-cart', 'CartController@update')->name('update-cart');
        Route::get('/checkout/{subtotal}', 'CartController@checkout')->name('checkout-cart');
    });

    Route::prefix('transaction')->group(function(){
        Route::get('/history', 'CartController@history')->name('index-trans');
        Route::get('/history/detail/{id}', 'CartController@detailHistory')->name('show-trans');

    });

    Route::get('/change-password', 'ChangeController@index')->name('index-change');
    Route::post('/change-password/store', 'ChangeController@store')->name('store-change');

});

Route::prefix('unit')->group(function(){
    Route::get('/show-category/{id}', 'UnitController@show')->name('show-cat');
    Route::post('/search-flower/{id}', 'ProductController@search')->name('search-flow');
    Route::get('/show-flower/{id}', 'ProductController@show')->name('show-flow');
});

