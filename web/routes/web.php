<?php

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
    return view('home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/test', 'index')->name('test');
    Route::get('/home', 'home')->name('home');
});

Route::controller(\App\Http\Controllers\CatalogController::class)->group(function (){
   Route::get('/catalog', 'index');
});


//Route::get('product/{id}')->name('product');
