<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use function Symfony\Component\String\u;
use Laravolt\Avatar\Facade as Avatar;
use Illuminate\Validation\Rules;


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
        $validator = Validator::make($request->all(), [
            "firstname" => "required",
            "lastname" => "required",
            "username" => "required",
            "email" => "email|required",
            "password" => ["required", Rules\Password::defaults()],
            "avatar" => "nullable"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where("email", "=", $request->input("email"))->first();

        if (!isset($user)) {
            $newUser = new User();
            $newUser->name = $request->input("firstname") . " " . $request->input("lastname");
            $newUser->username = $request->input("username");
            $newUser->email = $request->input("email");
            $newUser->password = Hash::make($request->input("password"));

            $fileName = time() . '.png';
            $filePath = "storage/images/" . $fileName;

            Avatar::create($newUser->name)->setDimension(200, 200)->save($filePath);
            $newUser->avatar = asset($filePath);
            $newUser->save();

            Auth::login($newUser);

            session(['showModal' => false]);
            return redirect()->route("setup");
        }

        return view("register");
    }

    public function signIn(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');


        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput();
    }


    public function googleLogin()
    {
        if (empty(Auth::user())) {
            session(['showChart' => true]);
            return Socialite::driver("google")
                ->scopes(['https://www.googleapis.com/auth/fitness.activity.read', 'https://www.googleapis.com/auth/fitness.body.read'])
                ->with(['access_type' => 'offline'])
                ->redirect();
        }
        if (!empty(Auth::user())) {
            session(['showChart' => true]);
            return redirect()->route("home");
        }
    }

    public function googleRedirect()
    {
        $user = Socialite::driver("google")->user();
        $refreshToken = $user->refreshToken;
        session()->put('access_token', $user->token);
        $email = User::where('email', '=', $user->email)->first();


        if (!empty($email)) {
            Auth::login($email);
            return redirect()->route("home");
        }
        if (empty($email)) {
            if (is_null($user->avatar)) {
                $fileName = time() . '.png';
                $filePath = "storage/images/" . $fileName;
                Avatar::create($user->name)->setDimension(200, 200)->save($filePath);
                $user->avatar = asset($filePath);
            }

            $i = 0;
            $username = strtolower(str_replace(' ', '', $user->name));
            while(User::where('username', $username)->exists())
            {
                $i++;
                $username = $username .  $i;
            }

            $user = User::create(
                [
                    "name" => $user->name,
                    "username" => $username,
                    "email" => $user->email,
                    "avatar" => $user->avatar,
                    "refresh_token" => $refreshToken,
                ]
            );
            Auth::login($user);
        }
        session(['showChart' => true]);
        return redirect()->route("setup");
    }

    public function microsoftLogin()
    {
        if (empty(Auth::user())) {
            return Socialite::driver('microsoft')->redirect();
        }
        if (!empty(Auth::user())) {
            return redirect()->route("home");
        }
    }

    public function microsoftRedirect()
    {
        $user = Socialite::driver("microsoft")->user();
        $email = User::where('email', '=', $user->email)->first();

        if (!empty($email)) {
            Auth::login($email);
            return redirect()->route("home");
        }
        if (empty($email)) {

            if (is_null($user->avatar)) {
                $fileName = time() . '.png';
                $filePath = "storage/images/" . $fileName;
                Avatar::create($user->name)->setDimension(200, 200)->save($filePath);
                $user->avatar = asset($filePath);
            }

            $i = 0;
            $username = strtolower(str_replace(' ', '', $user->name));
            while(User::where('username', $username)->exists())
            {
                $i++;
                $username = $username .  $i;
            }

            $user = User::create(
                [
                    "name" => $user->name,
                    "username" => $username,
                    "email" => $user->email,
                    "avatar" => $user->avatar
                ]
            );
            Auth::login($user);
        }

        return redirect()->route("setup");
    }

    public function logOut()
    {
        Auth::logout();
        session()->flush();
        return redirect("/");
    }
}
