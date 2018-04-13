<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Positions;
use App\Nationalities;

class Person extends Model
{
    protected $table = 'persons';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_name', 'ru_name', 'en_name', 'birthday', 'position_id', 'team_id'];
    public $timestamps = false;

    public function teams(){
        return $this->hasOne('App\Teams', 'id', 'team_id');
    }

    public function positions(){
        return $this->hasOne('App\Positions', 'id', 'position_id');
    }

    public function nationality(){
        return $this->belongsToMany('App\Nationality', 'person_nationality', 'person_id', 'nationality_id');
    }
}
