<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function getAboutUs(Request $request)
    {
        return view('about');
    }
}
