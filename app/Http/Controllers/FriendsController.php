<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Friend;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function friends()
    {
        $user = auth()->user();
        $friends = $user->friends()->with('achievement')->get()->sortByDesc(function ($friend) {
            return $friend->achievement->total_diamonds;
        });



        $worldLeaderboard = Achievement::with('user')
            ->take(10)
            ->orderBy('total_diamonds', 'desc')
            ->get();

        return view("friends", ['friends' => $friends, 'worldLeaderboard' => $worldLeaderboard]);
    }
}
