<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::get('/med', [App\Http\Controllers\ProductController::class, 'index'])->name('med_index');
Route::get('/med/{id?}', [App\Http\Controllers\ProductController::class, 'index'])->name('med_index_cat');

Route::get('/med/cat/{id}', [App\Http\Controllers\ProductController::class, 'cat'])->name('med_cat');

//Route::post('/add_cart', [App\Http\Controllers\ProductController::class, 'add_cart'])->name('add_cart');
//Router::post('/add_cart', 'ProductController@add_cart');
Route::post('/med/cat/{id}', [App\Http\Controllers\ProductController::class, 'add_cart'])->name('add_cart');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
