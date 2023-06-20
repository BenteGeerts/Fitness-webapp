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
        $friends = $user->friends()->join('achievements', 'achievements.user_id', '=', 'friends.friend_id')
            ->with('achievement')
            ->get();

        $friends->push($user);
        $friends = $friends->sortByDesc('achievement.total_diamonds');


        $worldLeaderboard = Achievement::with('user')
            ->take(10)
            ->orderBy('total_diamonds', 'desc')
            ->get();

        return view("friends", ['friends' => $friends, 'worldLeaderboard' => $worldLeaderboard]);
    }
}
