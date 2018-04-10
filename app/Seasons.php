<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    protected $table = 'seasons';
    protected $primaryKey = 'id';
    protected $fillable = ['season'];
    public $timestamps = false;
}
