<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gameroom extends Model
{
    protected $fillable = ['player_id','title'];
    
    public function player()
    {
            return $this->Hasone(Player::class, 'player_id');
    }

}
