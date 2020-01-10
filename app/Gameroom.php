<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gameroom extends Model
{
    protected $table = 'gamerooms';

    protected $fillable = ['player_id' ,'title'];
    

    public function player()
        {
            return $this->belongsTo(Player::class, 'player_id');
        }

}
