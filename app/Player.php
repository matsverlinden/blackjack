<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name'];

    public function gameroom()
    {
        return $this->belongsTo(gameroom::class, 'gameroom_id');
    }
}
