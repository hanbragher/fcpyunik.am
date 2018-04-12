<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['hy_category', 'ru_category', 'en_category'];
    public $timestamps = false;

    public function items(){
        return $this->belongsToMany('App\Item', 'item_category', 'category_id', 'item_id');
    }
}
