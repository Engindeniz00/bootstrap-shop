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

Route::view('/','frontend.layout.master')->name('master');
Route::view('/homepage','frontend.homepage')->name('homepage');
Route::view('/products','frontend.products')->name('products');
Route::view('/product-detail','frontend.product-detail')->name('product-detail');
