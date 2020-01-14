<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\GameroomCollection;
use App\Gameroom;
use App\Player;

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
        $players = Player::all()->toArray();
    
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

        return response()->json('The Lobby has been created');
    }

    // edit
    public function edit($id)
    {
        $gameroom = Gameroom::find($id);
        return response()->json($gameroom);
    }

    // update book
    public function update($id, Request $request)
    {
        $gameroom = Gameroom::find($id);
        $gameroom->update($request->all());

        return response()->json('The lobby successfully updated');
    }

    // delete book
    public function delete($id)
    {
        $gameroom = Gameroom::find($id);
        $gameroom->delete();

        return response()->json('The lobby successfully deleted');
    }
}
