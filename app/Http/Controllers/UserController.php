<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("pages.user.index", [
            'users' => $users
        ]);
    }

    public function add()
    {
        return view("pages.user.ajouter", []);
    }
}