<?php

namespace App\Http\Controllers;

use App\Player;
use App\Http\Resources\PlayerCollection;
use Illuminate\Http\Request;


class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all()->toArray();
        return array_reverse($players);
    }

    public function add(Request $request)
    {
        $player = new Player([
            'name' => $request->input('name')
        ]);
        $player->save();

        return response()->json('The name have successfully stored in the database!');
    }

