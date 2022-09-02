<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class News extends Controller
{
    public function getNews(Request $request)
    {
        return view('news');
    }
}
