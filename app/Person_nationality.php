<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person_nationality extends Model
{
    protected $table = 'person_nationality';
    protected $primaryKey = 'id';
    protected $fillable = ['person_id', 'nationality_id'];
    public $timestamps = false;
}
