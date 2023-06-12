<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    public function setup()
    {
        return view("setup.setup");
    }

    public function edit()
    {
        $userData = auth()->user()->userData;
        $weight = $userData->weight;
        $height = $userData->height;
        $age = $userData->age;
        $gender = $userData->gender->gender;
        $goal = $userData->goal->goal;
        $minVisits = $userData->min_visits;
        return view("setup.setup-edit",
            [
            'weight' => $weight,
            'height' => $height,
            'age' => $age,
            'gender' => $gender,
            'goal' => $goal,
            'minVisits' => $minVisits
        ]);
    }
}
