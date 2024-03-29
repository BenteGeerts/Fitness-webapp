<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\TrainingProgram;
use App\Models\User;
use App\Models\UserData;
use App\Traits\AnimalTrait;
use App\Traits\DiamondTrait;
use App\Traits\FitTrait;
use App\Traits\StreakTrait;
use App\Traits\TrainingTrait;
use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Fitness;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

class DashboardController extends Controller
{
    use StreakTrait;
    use DiamondTrait;
    use TrainingTrait;
    use FitTrait;

    public function Fit()
    {

        FitTrait::makeRequest();

        $user = auth()->user();
        $friends = $user->friends;

        $userData = $user->userData;
        $recommendedPrograms = TrainingProgram::where("level_id", "=", $userData->level_id)->orWhere([
            ['level_id', 4],
            ['user_id', auth()->id()]])->with('level')->get();


        $achievement = Achievement::where('user_id', auth()->id())->first();
        $streakLength = StreakTrait::retreiveLength($achievement);
        $diamonds = DiamondTrait::getDiamonds();
        $lastLiftedWeight = TrainingTrait::getLastTrainingWeight($achievement);
        $animalComparison = AnimalTrait::animalCompareWeight($lastLiftedWeight);


        return view("dashboard",
            [
                'friends' => $friends,
                'programs' => $recommendedPrograms,
                'streakLength' => $streakLength,
                'diamonds' => $diamonds,
                'lastLiftedWeight' => $lastLiftedWeight,
                'animalComparison' => $animalComparison,
            ]);
    }

}
