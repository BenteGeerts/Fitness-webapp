<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\TrainingProgram;
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


    public function detail($slug)
    {
        $training = TrainingProgram::where("slug", $slug)->first();

        if($training->user_id != null && auth()->id() != $training->user_id)
        {
            return redirect()->route('training');
        }

        return view("training-detail", ["training" => $training]);
    }

    public function play($slug)
    {
        return view("training-play")->with("slug", $slug);
    }
}
