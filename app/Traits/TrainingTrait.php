<?php

namespace App\Traits;

use App\Models\Exercise;
use App\Models\ExerciseHistory;
use App\Models\UserData;

trait TrainingTrait
{
    public static function calculateDiamonds($exerciseId, $reps, $weight)
    {
        $exercise = Exercise::find($exerciseId)->first();
        $baseDiamonds = $exercise->diamonds;

        $userData = UserData::where('user_id', auth()->id())->first();


        return round(($baseDiamonds * $userData->age * $reps * $weight * ($userData->height) / 100) / 1000);
    }

    public static function getLastTrainingWeight()
    {

        $history = ExerciseHistory::where('user_id', auth()->id())->latest()->first();

        if (isset($history)) {
            $timestamp = $history->created_at;

            $weights = ExerciseHistory::where('user_id', auth()->id())->where('created_at', $timestamp)->get();

            $totalWeight = 0;
            foreach ($weights as $weight) {
                $totalWeight += $weight->weight * $weight->reps;
            }

            return $totalWeight;
        }
        if (!isset($history)) {
            return 0;
        }
    }
}
