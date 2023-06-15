<?php

namespace App\Traits;

use App\Models\Achievement;
use App\Models\Shop;
use Carbon\Carbon;

trait DiamondTrait
{
    public static function setDiamonds($achievement, $totalDiamonds)
    {
        if (isset($achievement)) {
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
        if (isset($achievement)) {
            return $achievement->total_diamonds;
        }
        if (!isset($achievement)) {
            return 0;
        }
    }

    public static function checkForDoublePointsPowerUp() : bool
    {
        $diamondsShopItems = Shop::where('user_id', auth()->id())->where('powerup_id', 2)->get();

        foreach ($diamondsShopItems as $item) {
            if (Carbon::parse($item->created_at)->diffInHours(Carbon::now()) < 24) {
                return true;
            }
            return false;
        }

        return false;
    }
}
