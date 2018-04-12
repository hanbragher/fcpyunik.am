<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $fillable =
        [
        'hy_title', 'ru_title', 'en_title',
        'hy_seoTitle', 'ru_seoTitle', 'en_seoTitle',
        'hy_content', 'ru_content', 'en_content',
        'hy_metaDescription', 'ru_metaDescription', 'en_metaDescription',
        'hy_keyWords', 'ru_keyWords', 'en_keyWords',
        'future_images',
        'home_slider',
        'slider',
        'format_id',
        'date'
        ];
    protected $dates = ['deleted_at'];
    //public $timestamps = false;

    public function formats(){
        return $this->hasOne('App\Formats', 'id', 'format_id');
    }

    public function categories(){
        return $this->belongsToMany('App\Category', 'item_category', 'item_id', 'category_id');
    }
}
