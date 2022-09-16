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

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('/test', function () {
    return view('test');
})->name("test");

Route::get('/stores', function () {
    return view('stores.index');
})->name("stores.index");

Route::get('/account', function () {
    return view('account.index');
})->name("account.index");

Route::get('/cart', function () {
    return view('cart.index');
})->name("cart.index");
