<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $table = 'players';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_name', 'ru_name', 'en_name', 'birthday', 'team_id', 'status_id', 'position_id'];
    public $timestamps = false;
}
