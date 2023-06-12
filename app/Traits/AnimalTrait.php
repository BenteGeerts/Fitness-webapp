<?php

namespace App\Traits;

use App\Models\Animal;

trait AnimalTrait
{
    public static function animalCompareWeight($lastLiftedWeight)
    {
        $animals = Animal::all();
        $animals = $animals->sortByDesc('weight');

        $comparisonResult = "";

        $borderWeight = 1000;
        if(!isset($lastLiftedWeight) || $lastLiftedWeight == 0)
        {
            return "air";
        }
        if ($lastLiftedWeight < $borderWeight) {
            foreach ($animals as $animal) {
                if ($lastLiftedWeight >= $animal->weight) {

                    $animalCount = floor($lastLiftedWeight / $animal->weight);
                    $comparisonResult .= $animalCount . " " . $animal->name . ", ";
                    $lastLiftedWeight %= $animal->weight;
                }
            }

            $comparisonResult = rtrim($comparisonResult, ", ");
        } else {
            $largestAnimal = $animals->first();
            $comparisonResult = "1 " . $largestAnimal->name;
        }

        return $comparisonResult;
    }
}
