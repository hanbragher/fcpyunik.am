<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_team', 'ru_team', 'en_team'];
    public $timestamps = false;

    public function player(){
        return $this->belongsTo('App\Player', 'id', 'team_id');
    }
}
