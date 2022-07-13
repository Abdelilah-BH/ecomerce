<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products as ModelsProducts;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        try {
            $products = ModelsProducts::all();
            return view('pages.product.index', [
                'products' => $products,
            ]);
        } catch (\Exception $err) {
            return view('pages.product.index', [
                'products' => [],
            ]);
        }
    }

    public function getAddProduct()
    {
        try {
            $categories = Categories::all();
            
            return view('pages.product.add', [
                'categories' => $categories,
            ]);
        } catch (\Exception $err) {
        }
    }

    public function insert(Request $req)
    {
        return view('pages.product.add');
    }
}
