<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    public function setup() {
        return view("setup.setup");
    }
}
