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
        $diamonds = 0;
        $exercises = session('selectedExercises');

        if(!empty($exercises))
        {
            $exercises = Exercise::whereIn("name", $exercises)->get();

            foreach($exercises as $exercise)
            {
                $diamonds += $exercise->diamonds;
            }
        }
        return view("new-training", ["exercises" => $exercises, "diamonds" => $diamonds]);
    }

    public function addExercise()
    {
        return view("add-exercise");
    }

    public function detail($slug)
    {
        return view("training-detail")->with("slug", $slug);
    }

    public function play($slug)
    {
        return view("training-play")->with("slug", $slug);
    }
}
