<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view("profile")->with('user', $user);
    }

    public function show($username)
    {
        $user = User::where('username', '=', $username)->first();
        return view("profile-variant")->with("user", $user);
    }
}
