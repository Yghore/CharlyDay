<?php

use App\Http\Controllers\cartController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/test', 'index');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('/product/{id}', 'index')->name('product');
    Route::post('/product/add/{id}', 'addProductToCart')->name('product.add');
    //Route::post('/product/remove/{id}', 'removeCart')->name('product.remove');

});


Route::controller(CartController::class)->group(function (){
    Route::get('cart', 'index');
});

Route::controller(CatalogController::class)->group(function (){
   Route::get('/catalog/{page?}', 'index');
});


//Route::get('product/{id}')->name('product');
