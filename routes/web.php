<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Auth::routes();


    Route::get('cart', [ProductController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    
    
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/home', 'App\Http\Controllers\ProductController@index')->name('home');
        Route::get('/products', 'App\Http\Controllers\ProductsController@index')->name('products.index');
        });

Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    Route::group(['prefix' => 'products'], function() {
    Route::get('/create', 'ProductsController@create')->name('products.create');
    Route::post('/create', 'ProductsController@store')->name('products.store');
    Route::get('/{product}/show', 'ProductsController@show')->name('products.show');
    Route::get('/{product}/edit', 'ProductsController@edit')->name('products.edit');
    Route::patch('/{product}/update', 'ProductsController@update')->name('products.update');
    Route::delete('/{product}/delete', 'ProductsController@destroy')->name('products.destroy');
 });
});




