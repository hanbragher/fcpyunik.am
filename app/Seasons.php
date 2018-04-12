<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    protected $table = 'seasons';
    protected $primaryKey = 'id';
    protected $fillable = ['season'];
    public $timestamps = false;

    public function player(){
        return $this->belongsToMany('App\Player', 'player_season', 'season_id', 'player_id');
    }
}
