<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gameroom extends Model
{
    protected $fillable = ['player_id','name'];
    
    public function player()
    {
            return $this->hasOne(Player::class, 'player_id');
    }

}
