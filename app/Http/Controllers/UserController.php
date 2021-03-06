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

    public function insert(Request $req)
    {
        $req->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ], [
            'firstName.required' => 'Nom est obligatoire.',
            'lastName.required' => 'Prenom est obligatoire.',
            'email.required' => 'E-mail est obligatoire.',
            'email.email' => 'E-mail doit etre une adresse e-mail valide.',
            'password.required' => 'Mot de passe est obligatoire.',
        ]);

        try {
            $name = $req->firstName . " " . $req->lastName;
            $email = $req->email;
            $admin = $req->admin;
            $active = $req->active;
            $phone = $req->phone;
            $password = bcrypt($req->password);

            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->admin = $admin;
            $user->active = $active;
            $user->phone = $phone;
            $user->password = $password;
            if ($req->file('image')) {
                $file = $req->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/users/'), $filename);
                $user->image = 'img/users/' . $filename;
            }
            $user->save();

            return view("pages.user.ajouter", [
                "message" => "Utilisateur ajouter avec success 🚀"
            ]);
        } catch (\Exception $err) {
            return view("pages.user.ajouter", [
                "error" => "Error servenu!!"
            ]);
        }
    }
}
