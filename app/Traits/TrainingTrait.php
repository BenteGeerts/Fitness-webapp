<?php

namespace App\Traits;

use App\Models\Exercise;
use App\Models\UserData;

Trait TrainingTrait
{
    public static function calculateDiamonds($exerciseId, $reps, $weight)
    {
        $exercise = Exercise::find($exerciseId)->first();
        $baseDiamonds = $exercise->diamonds;

        $userData = UserData::where('user_id', auth()->id())->first();


        return round(($baseDiamonds * $userData->age * $reps * $weight * ($userData->height)/ 100) / 1000);
    }
}
