<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingpage()
    {
        return view("landingpage");
    }
}
