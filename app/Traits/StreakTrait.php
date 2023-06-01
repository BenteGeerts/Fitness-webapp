<?php

namespace App\Traits;

use App\Models\Achievement;
use App\Models\TrainingProgramsHistory;
use App\Models\User;
use Carbon\Carbon;

trait StreakTrait
{
    public static function checkStreak($userId)
    {
        $currentDate = now()->toDateString();

        $achievement = Achievement::where('user_id', $userId)
            ->whereDate('created_at', $currentDate)
            ->first();

        if (!$achievement) {
            Achievement::create([
                'user_id' => $userId,
                'date' => $currentDate,
            ]);
        }

        $trainingsCount = TrainingProgramsHistory::where('user_id', $userId)
            ->whereDate('created_at', $currentDate)
            ->count();

        if ($trainingsCount <= 1) {
            Achievement::where('id', $userId)
                ->increment('streak_length');
        }
    }

    public static function retreiveLength($userId)
    {
        $achievement = Achievement::where('user_id', $userId)->first();

        if (isset($achievement)) {
            return $achievement->streak_length;
        } else {
            return 0;
        }
    }
}
