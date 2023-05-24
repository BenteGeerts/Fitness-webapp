<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function training()
    {
        return view("training");
    }

    public function newTraining()
    {
        return view("new-training");
    }

    public function addExercise()
    {
        return view("add-exercise");
    }
}
