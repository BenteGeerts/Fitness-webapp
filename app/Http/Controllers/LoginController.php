<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    public function googleLogin()
    {
        if (empty(Auth::user())) {
            return Socialite::driver("google")
                ->scopes(['https://www.googleapis.com/auth/fitness.activity.read', 'https://www.googleapis.com/auth/fitness.body.read'])
                ->googleRedirect();
        }
        if(!empty(Auth::user())) {
            return redirect("/dashboard");
        }
    }

    public function googleRedirect()
    {
        $user = Socialite::driver("google")->user();
        session()->put('access_token', $user->token);
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

        return redirect("/dashboard");
    }

    public function facebookLogin()
    {

    }

    public function facebookRedirect()
    {

    }
}
