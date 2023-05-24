<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrainingController extends Controller
{
    public function training()
    {
        return view("training");
    }

    public function newTraining()
    {
        $exercises = session('selectedExercises');

        if(!empty($exercises))
        {
            $exercises = Exercise::whereIn("name", $exercises)->get();
        }
        $diamonds = 0;
        foreach($exercises as $exercise)
        {
            $diamonds += $exercise->diamonds;
        }
        return view("new-training", ["exercises" => $exercises, "diamonds" => $diamonds]);
    }

    public function addExercise()
    {
        return view("add-exercise");
    }
}
