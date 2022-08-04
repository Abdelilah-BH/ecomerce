<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    function index()
    {
        $categories = Categories::all();

        return view("dashboard/pages/category/index", [
            'categories' => $categories,
        ]);
    }

    public function insert(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'order' => 'required|min:0',
            'status' => 'required',
        ], [
            'name.required' => 'Nom de categorie est obligatoire.',
            'order.required' => 'Classement est obligatoire.',
            'status.required' => 'Status est obligatoire.',
        ]);
        try {
            $category = Categories::create([
                'name' => $req->name,
                'description' => $req->description,
                'order' => $req->order,
                'status' => $req->status
            ]);
            // dd($category);
            return view('dashboard.pages.category.add', [
                "message" => "Categorie bien ajouter 🎉🎊"
            ]);
        } catch (\Exception $err) {
            dd($err);
            return view('dashboard.pages.category.add');
        }
    }
}
