<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player_season extends Model
{
    protected $table = 'player_season';
    protected $primaryKey = 'id';
    protected $fillable = ['player_id', 'season_id'];
    public $timestamps = false;
}
