<?php

namespace App\Http\Controllers;

use App\Jobs\CreateGameJob;
use Illuminate\Http\Request;

class Game extends Controller
{
    public function CreateGame(Request $request)
    {

        $item = new \App\Models\Game();
        $item->setId(5);

        $job = new CreateGameJob($item);
        $this->dispatch($job);

    }
}
