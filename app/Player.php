<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teams;
use App\Statuses;
use App\Positions;

class Player extends Model
{
    protected $table = 'players';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_name', 'ru_name', 'en_name', 'birthday', 'team_id', 'status_id', 'position_id'];
    public $timestamps = false;

    public function teams(){
        return $this->hasOne('App\Teams', 'id', 'team_id');
    }

    public function statuses(){
        return $this->hasOne('App\Statuses', 'id', 'status_id');
    }

    public function positions(){
        return $this->hasOne('App\Positions', 'id', 'position_id');
    }

    public function nationality(){
        return $this->belongsToMany('App\Nationality', 'player_nationality', 'player_id', 'nationality_id');
    }

    public function seasons(){
        return $this->belongsToMany('App\Season', 'player_season', 'player_id', 'season_id');
    }
}
