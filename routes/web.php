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
// ====================== Client ==========================================

Route::get("/", function () {
    return view("client/pages/home");
});

// ====================== Dashbord ========================================

Route::get("/admin/login", function () {
    return view("dashboard/pages/login");
})->name('login');

Route::get("/admin", function () {
    return view("dashboard/pages/home");
})->name('home.index');

Route::get("/admin/categories", [CategoriesController::class, "index"])->name('categories.index');
Route::get("/admin/categories/ajouter",  function () {
    return view("dashboard/pages/category/add");
})->name('categories.create');
Route::post("/admin/categories/ajouter", [CategoriesController::class, "insert"])->name('categories.store');

Route::get("/admin/commandes", function () {
    return view("dashboard/pages/order/index");
})->name('commandes.index');

Route::get("/admin/produits", [ProductsController::class, 'index'])->name('produits.index');
Route::get("/admin/produits/ajouter", [ProductsController::class, 'getAddProduct'])->name('produits.create');
Route::post("/admin/produits/ajouter", [ProductsController::class, 'insert'])->name('produits.store');

Route::get("/admin/utilisateurs", [UserController::class, 'index'])->name('utilisateurs.index');
Route::get("/admin/utilisateurs/ajouter", function () {
    return view("dashboard/pages/user/ajouter");
})->name('utilisateurs.create');
Route::post("/admin/utilisateurs/ajouter", [UserController::class, "insert"])->name('utilisateurs.store');
