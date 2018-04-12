<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formats extends Model
{
    protected $table = 'formats';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_format', 'ru_format', 'en_format'];
    public $timestamps = false;

    public function items(){
        return $this->belongsTo('App\Item', 'id', 'format_id');
    }
}
