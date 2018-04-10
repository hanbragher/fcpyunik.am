<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $table = 'positions';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_position', 'ru_position', 'en_position'];
    public $timestamps = false;
}
