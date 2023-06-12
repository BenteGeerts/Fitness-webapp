<?php

namespace App\Http\Controllers;

use App\Models\TrainingProgramsHistory;
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

        $trainings = TrainingProgramsHistory::where("user_id", auth()->id())->get();

        return view("profile", ['user' => $user, 'streakLength' => $streakLength,
            'totalDiamonds' => $totalDiamonds, 'trainings' => $trainings]);
    }

    public function show($username)
    {
        $user = User::where('username', '=', $username)->first();
        $userAchievement = $user->achievement;
        $trainings = TrainingProgramsHistory::where("user_id", $user->id)->get();
        return view("profile-variant", ['user' => $user, 'userAchievement' => $userAchievement, 'trainings' => $trainings]);
    }
}
