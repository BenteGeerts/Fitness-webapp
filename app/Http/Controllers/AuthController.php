<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use function Symfony\Component\String\u;
use Laravolt\Avatar\Facade as Avatar;


class AuthController extends Controller
{
    public function signUp()
    {
        return view("register");
    }

    public function login()
    {
        return view("login");
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            "firstname" => "required",
            "lastname" => "required",
            "email" => "email|required",
            "password" => "required",
            "confirm" => "required",
            "avatar" => "nullable"
        ]);

        $user = User::where("email", "=", $request->input("email"))->first();

        if (!isset($user) && $request->input("password") == $request->input("confirm")) {
            $newUser = new User();
            $newUser->name = $request->input("firstname") . " " . $request->input("lastname");
            $newUser->email = $request->input("email");
            $newUser->password = Hash::make($request->input("password"));
            $newUser->save();

            Auth::login($newUser);
            return redirect("dashboard");
        }

        return view("register");
    }

    public function signIn(Request $request) {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');


        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, redirect back with errors
        return redirect()->back()->withInput();
    }


    public function googleLogin()
    {
        if (empty(Auth::user())) {
            return Socialite::driver("google")
                ->scopes(['https://www.googleapis.com/auth/fitness.activity.read', 'https://www.googleapis.com/auth/fitness.body.read'])
                ->redirect();
        }
        if (!empty(Auth::user())) {
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
            return redirect("/dashboard");
        }
        if (empty($email)) {
            if(is_null($user->avatar))
            {
                $fileName = time(). '.png';
                $filePath = "public/storage/" . $fileName;
                Avatar::create($user->name)->setDimension(200, 200)->save($filePath);
                $user->avatar = asset($filePath);
            }

            $user = User::create(
                [
                    "name" => $user->name,
                    "email" => $user->email,
                    "avatar" => $user->avatar
                ]
            );

            Auth::login($email);
        }

        return redirect("/dashboard");
    }

    public function microsoftLogin()
    {
        if (empty(Auth::user())) {
            return Socialite::driver('microsoft')->redirect();
        }
        if (!empty(Auth::user())) {
            return redirect("/dashboard");
        }
    }

    public function microsoftRedirect()
    {
        $user = Socialite::driver("microsoft")->user();
        $email = User::where('email', '=', $user->email)->first();

        if (!empty($email)) {
            Auth::login($email);
            return redirect("/dashboard");
        }
        if (empty($email)) {

            if(is_null($user->avatar))
            {
                $fileName = time(). '.png';
                $filePath = "storage/images/" . $fileName;
                Avatar::create($user->name)->setDimension(200, 200)->save($filePath);
                $user->avatar = asset($filePath);
            }

            $user = User::create(
                [
                    "name" => $user->name,
                    "email" => $user->email,
                    "avatar" => $user->avatar
                ]
            );

            Auth::login($user);
        }

        return redirect("/dashboard");
    }

    public function logOut() {
        Auth::logout();
        return redirect("/");
    }
}
