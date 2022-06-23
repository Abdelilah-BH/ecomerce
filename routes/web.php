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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get("/", function(){
    return view("pages/home");
});

Route::get("/categories", function(){
    return view("pages/category/index");
});

Route::get("/clients", function(){
    return view("pages/customer/index");
});

Route::get("/commandes", function(){
    return view("pages/order/index");
});

Route::get("/produits", function(){
    return view("pages/product/index");
});

Route::get("/utilisateurs", function(){
    return view("pages/user/index");
});