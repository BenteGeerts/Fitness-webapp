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

        $largestAnimal = $animals->first();
        if(!isset($lastLiftedWeight) || $lastLiftedWeight == 0)
        {
            return "air";
        }
            foreach ($animals as $animal) {
                if ($lastLiftedWeight >= $animal->weight) {

                    $animalCount = floor($lastLiftedWeight / $animal->weight);
                    if($animalCount > 1){
                        $comparisonResult .= $animalCount . " " . $animal->name . "s, ";
                    }
                    else {
                        $comparisonResult .= $animalCount . " " . $animal->name . ", ";
                    }
                    $lastLiftedWeight %= $animal->weight;
                }
            }

            $comparisonResult = rtrim($comparisonResult, ", ");

        return $comparisonResult;
    }
}
