<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('/product/{id}', 'index')->name('product');
    Route::post('/product/add/{id}', 'addProductToCart')->name('product.add');
    //Route::post('/product/remove/{id}', 'removeCart')->name('product.remove');

});


Route::controller(CartController::class)->group(function (){
    Route::get('cart', 'index')->name('cart');
    Route::get('cart/confirm', 'validateCart')->name('cart.confirm');
    Route::get('cart/validatation', 'confirmOrder')->name('cart.validate');
});

Route::controller(CatalogController::class)->group(function (){
    Route::get('/catalog/{page?}', 'index')->name('catalog');
    Route::get('/catalog/search', 'search')->name('catalog.search');
});
