<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationalities extends Model
{
    protected $table = 'nationalities';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_nationality', 'ru_nationality', 'en_nationality'];
    public $timestamps = false;


}
