<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        $userAchievement = $user->achievement;
        $streakLength = $userAchievement->streak_length;
        $totalDiamonds = $userAchievement->total_diamonds;
        return view("profile", ['user' => $user, 'streakLength' => $streakLength, 'totalDiamonds' => $totalDiamonds]);
    }

    public function show($username)
    {
        $user = User::where('username', '=', $username)->first();
        return view("profile-variant")->with("user", $user);
    }
}
