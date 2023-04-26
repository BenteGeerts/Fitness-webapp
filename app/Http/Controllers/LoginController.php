<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Socialite;

class LoginController extends Controller
{
    public function login()
    {
        if (empty(Auth::user())) {
            return Socialite::driver("google")->redirect();
        }
    }

    public function redirect()
    {
        $user = Socialite::driver("google")->user();
        $email = User::where('email', '=', $user->email)->first();

        if (!empty($email)) {
            Auth::login($email);
            return redirect("/");
        }
        if (empty($email)) {
            $user = User::create(
                [
                    "name" => $user->name,
                    "email" => $user->email,
                    "avatar" => $user->avatar
                ]
            );
        }

        return redirect("/");
    }
}
