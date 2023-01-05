<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

class registrasiController extends Controller
{
    public function index () {
        return view("registrasi.index",[
            "title" => "registrasi"
        ]);
    }

    public function store (Request $request ) {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "email" => "required|email:dns|unique:users",
            "password" => "required|max:255|min:3"
        ]);

        $validatedData["password"] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect("/login")->with("berhasil","Selamat Registrasi Berhasil");
    }
}
