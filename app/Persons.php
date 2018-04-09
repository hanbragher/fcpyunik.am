<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $table = 'persons';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_name', 'ru_name', 'en_name', 'birthday', 'position_id', 'team_id'];
    public $timestamps = false;
}
