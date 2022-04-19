<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("pages.auth.login");
    }

    public function store(Request $request)
    {
        $request->validate(array(
            "email" => "required|email",
            "password" => "required"
        ));

        $user = User::where(['email' => $request->email, 'userpass' => $request->password])->first();

        if (!$user) {
            return redirect()->back()->with("error", "Login or Password invalid");
        }

        Auth::login($user);
        return redirect()->route("index");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
