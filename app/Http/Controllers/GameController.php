<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('components.game.index', compact('games'));
    }

    public function show(Game $game)
    {
        $games = $game;

        $title = $games->name;

        return view('components.game.show', compact('games', 'title'));
    }
}
