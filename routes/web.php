<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

use App\Models\User;

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

Route::get("/", function () {
    return view("pages/home");
});

Route::get("/categories", [CategoriesController::class, "index"]);

Route::get("/clients", function () {
    return view("pages/customer/index");
});

Route::get("/commandes", function () {
    return view("pages/order/index");
});

Route::get("/produits", [ProductsController::class, 'index']);

Route::get("/utilisateurs", [UserController::class, 'index']);
