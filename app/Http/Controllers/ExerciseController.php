<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class exerciseController extends Controller
{
    public function addExercise()
    {
        return view("add-exercise");
    }

    public function detail($slug)
    {
        $exercise = Exercise::where("slug", "=", $slug)->first();
        return view("exercise", ['exercise' => $exercise]);
    }
}
