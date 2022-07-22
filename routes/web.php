<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

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

Route::get("/login", function () {
    return view("pages/login");
});

Route::get("/", function () {
    return view("pages/home");
});

Route::get("/categories", [CategoriesController::class, "index"]);
Route::get("/categories/ajouter",  function () {
    return view("pages/category/add");
});
Route::post("/categories/ajouter", [CategoriesController::class, "insert"]);

Route::get("/commandes", function () {
    return view("pages/order/index");
});

Route::get("/produits", [ProductsController::class, 'index']);
Route::get("/produits/ajouter", [ProductsController::class, 'getAddProduct']);
Route::post("/produits/ajouter", [ProductsController::class, 'insert']);

Route::get("/utilisateurs", [UserController::class, 'index']);
Route::get("/utilisateurs/ajouter", function () {
    return view("pages/user/ajouter");
});
Route::post("/utilisateurs/ajouter", [UserController::class, "insert"]);
