<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Category extends Model
{
    protected $table = 'item_category';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id', 'item_id'];
    public $timestamps = false;


}
