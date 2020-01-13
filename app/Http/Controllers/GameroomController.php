<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Gameroom;

class GameroomController extends Controller
{
    // require name to continue
    // might be wrong because auth is working differently now
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // load all gamerooms
    public function index()
    {
        $gamerooms = Gameroom::all()->toArray();
        return array_reverse($gamerooms);
    }

    // Create gameroom
    // validation?
    public function add(Request $request)
    {
        $gameroom = new Gameroom([
            // this is should not be an input
            "player_id" => $request->input('player_id'),
            'title' => $request->input('title')
        ]);

        $gameroom->save();
    }
}
