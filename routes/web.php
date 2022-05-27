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

Route::get('/hello', function () {
    return 'welcome';
});


Route::get("/preorder", function () {
    return "PreOrder Items";
});

Route::get("/buyonce", function () {
    return "Buyonce Items";
});

Route::get("/subscribe", function () {
    return "subscribe";
});
