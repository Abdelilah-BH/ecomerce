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
        $req->validate([
            'sku' => 'required',
            'name' => 'required',
            'category' => 'required|nullable',
            'price' => 'required|numeric|min:0',
            'discount' => 'numeric|min:0',
            'hidden' => 'required',
        ], [
            'sku.required' => 'SKU est obligatoire.',
            'name.required' => 'Titre est obligatoire.',
            'category.required' => 'Categorie est obligatoire.',
            'price.min' => 'Le prix minimum doit être de 0 dirhams.',
            'discount.min' => 'Remise minimum doit être de 0%.',
            'hidden.required' => 'Caché est obligatoire.',
        ]);
        try {
            dd($req->input());
            $sku = $req->sku;
            $name = $req->name;
            $categoryId = $req->category;
            $price = $req->price;
            $discount = $req->discount;
            $stock = $req->stock;
            $tags = $req->tags;
            $brand = $req->brand;
            $model = $req->model;
            $storage = $req->storage;
            $typeDisqueDur = $req->type_disque_dur;
            $graphics = $req->graphics;
            $weight = $req->weight;
            $status = $req->status;
            $hidden = $req->hidden;
            $description = $req->description;

            $product = ModelsProducts::create([
                'sku' => $sku,
                'name' => $name,
                'category_id' => $categoryId,
                'price' => $price,
                'discount' => $discount,
                'stock' => $stock,
                'tag' => $tags,
                'brand' => $brand,
                'model' => $model,
                'storage' => $storage,
                'type_disque_dur' => $typeDisqueDur,
                'graphics' => $graphics,
                'weight' => $weight,
                'status' => $status,
                'hidden' => $hidden,
                'description' => $description,
                'images' => "",
            ]);
            $categories = Categories::all();
            if (isset($product->id) && $product->id) {
                return view('pages.product.add', [
                    'categories' => $categories,
                    'message' => "Produit est bien ajouter.",
                ]);
            } else {
                return view('pages.product.add', [
                    'categories' => $categories,
                    'message' => "Produit Non ajouter.",
                ]);
            }
        } catch (\Exception $err) {
            $categories = Categories::all();
            dd($err);
            return view('pages.product.add', [
                'categories' => $categories,
            ]);
        }
    }
}
