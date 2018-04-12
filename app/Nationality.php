<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persons;
use App\Person_nationality;
use App\Players;

class Nationality extends Model
{
    protected $table = 'nationalities';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_nationality', 'ru_nationality', 'en_nationality'];
    public $timestamps = false;

    public function persons(){
        return $this->belongsToMany('App\Persons', 'person_nationality', 'nationality_id', 'person_id');
    }

    public function player(){
        return $this->belongsToMany('App\Player', 'player_nationality', 'nationality_id', 'player_id');
    }



}
