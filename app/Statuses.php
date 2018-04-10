<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_status', 'ru_status', 'en_status'];
    public $timestamps = false;

    public function players(){
        return $this->belongsTo('App\Players', 'id', 'status_id');
    }
}
