<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player_nationality extends Model
{
    protected $table = 'player_nationality';
    protected $primaryKey = 'id';
    protected $fillable = ['player_id', 'nationality_id'];
    public $timestamps = false;
}
