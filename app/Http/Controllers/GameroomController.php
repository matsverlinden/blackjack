<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\GameroomCollection;
use App\Http\Resources\PlayerCollection;
use App\Gameroom;
use App\Player;

class GameroomController extends Controller
{
    
    // auth not working because player doesnt use AUTH
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // load all gamerooms
    public function index()
    {
        $gamerooms = Gameroom::all()->toArray();
        $players = Player::all()->toArray();

        return response()->json([
            "gamerooms" => $gamerooms, 
            "players" => $players
        ]);
        
    }

    // Create Gameroom
    // validation?
    // unable to obtain player_id so its null at all times
    public function create(Request $request)
    {
        $gameroom = new Gameroom([
            "player_id" => $request->input('player_id'),
            "name"  => $request->input('name')
        ]);

        $gameroom->save();

        return response()->json('The Lobby has been created');
    }

    public function show(Gameroom $gameroom)
    {
        return response()->json('very lobby');
    }
}
