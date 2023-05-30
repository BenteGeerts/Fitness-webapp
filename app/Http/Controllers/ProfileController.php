<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view("profile");
    }

    public function show($id)
    {
        $user = User::find($id);
        return view("profile-variant")->with("user", $user);
    }
}
