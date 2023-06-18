<?php

namespace App\Traits;

use App\Models\Achievement;
use App\Models\Exercise;
use App\Models\ExerciseHistory;
use App\Models\UserData;

trait TrainingTrait
{
    public static function calculateDiamonds($exerciseId, $reps, $weight, $doublePoints)
    {
        $exercise = Exercise::find($exerciseId)->first();
        $baseDiamonds = $exercise->diamonds;

        $userData = UserData::where('user_id', auth()->id())->first();

        if ($doublePoints) {
            return round(($baseDiamonds * $userData->age * $reps * $weight * ($userData->height) / 100) / 1000) * 2;
        }
        return round(($baseDiamonds * $userData->age * $reps * $weight * ($userData->height) / 100) / 1000);
    }

    public static function setLastTrainingWeight($achievement, $weight)
    {
        if (isset($weight) && $weight > 0) {
            $achievement->total_weight = $weight;
            $achievement->update();
        }
    }

    public static function getLastTrainingWeight($achievement)
    {
        if (isset($achievement)) {
            return $achievement->total_weight;
        }

        return 0;
    }
}
