<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("pages.auth.register");
    }

    public function store(Request $request)
    {
        $request->validate(array( 
            "email" => "required|email",
            "password" => "required"
        ));

        $user = User::create(array(
            "email" => $request->email,
            "userpass" => $request->password
        ));

        Auth::login($user);

        return redirect()->route("index")->with("success", "Login or Password invalid");
    }
}
