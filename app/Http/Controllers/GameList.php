<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameList extends Controller
{
    public function getAllGames(Request $request)
    {
        return view('main_content');
    }
}
