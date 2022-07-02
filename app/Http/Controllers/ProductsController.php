<?php

namespace App\Http\Controllers;

use App\Models\Products as ModelsProducts;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = ModelsProducts::all();
        return view('pages.product.index', [
            'products' => $products,
        ]);
    }

    public function add()
    {
        return view('pages.product.add');
    }
}
