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
})->name('login');

Route::get("/", function () {
    return view("pages/home");
})->name('home.index');

Route::get("/categories", [CategoriesController::class, "index"])->name('categories.index');
Route::get("/categories/ajouter",  function () {
    return view("pages/category/add");
})->name('categories.create');
Route::post("/categories/ajouter", [CategoriesController::class, "insert"])->name('categories.store');

Route::get("/commandes", function () {
    return view("pages/order/index");
})->name('commandes.index');

Route::get("/produits", [ProductsController::class, 'index'])->name('produits.index');
Route::get("/produits/ajouter", [ProductsController::class, 'getAddProduct'])->name('produits.create');
Route::post("/produits/ajouter", [ProductsController::class, 'insert'])->name('produits.store');

Route::get("/utilisateurs", [UserController::class, 'index'])->name('utilisateurs.index');
Route::get("/utilisateurs/ajouter", function () {
    return view("pages/user/ajouter");
})->name('utilisateurs.create');
Route::post("/utilisateurs/ajouter", [UserController::class, "insert"])->name('utilisateurs.store');
