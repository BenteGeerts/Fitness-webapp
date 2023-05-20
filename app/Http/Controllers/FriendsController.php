<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function friends()
    {
        $user = auth()->user();
        $friends = $user->friends;
        return view("friends")->with("friends", $friends);
    }
}
