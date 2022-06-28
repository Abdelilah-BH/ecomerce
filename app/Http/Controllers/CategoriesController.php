<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    function index(){
        $categories = Categories::all();
    
        return view("pages/category/index", [
            'categories' => $categories,
        ]);
    }
}
