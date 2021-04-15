<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Level;
use App\Models\Score;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        $cards = Card::all();
        return view('card', [
            'levels' => $levels,
            'cards' => $cards
        ]);
    }

    public function level()
    {
        $levels = Level::all();
        return view('level', compact('levels'));
    }

    public function score()
    {
        $scores = Score::all();
        return view('score', compact('scores'));
    }
}
