<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Commandes;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Controller;
use App\Models\Products as ModelsProducts;

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

Route::get("/categories", "Categories@index");

Route::get("/clients", function(){
    return view("pages/customer/index");
});

Route::get("/commandes", "Commandes@index");

Route::get("/produits", function(){
    $products = ModelsProducts::all();
    return view('pages.product.index', [
        'products' => $products,
    ]);
});

Route::get("/utilisateurs", function(){
    return view("pages/user/index");
});