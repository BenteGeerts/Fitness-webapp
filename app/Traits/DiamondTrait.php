<?php

namespace App\Traits;

use App\Models\Achievement;

trait DiamondTrait
{
    public static function setDiamonds($achievement, $totalDiamonds)
    {
        if(isset($achievement)) {
            $achievement->total_diamonds += $totalDiamonds;
            $achievement->update();
        }
        if (!isset($achievement)) {
            $achievement = new Achievement();
            $achievement->user_id = auth()->id();
            $achievement->total_diamonds = $totalDiamonds;
            $achievement->save();
        }
    }

    public static function getDiamonds()
    {
        $achievement = auth()->user()->achievement;
        return $achievement->total_diamonds;
    }
}
