<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $table = 'sport';

    protected $fillable = ['title','description','image','page_id'];



    public function pageGallery()
    {
        return $this->hasMany('App\PageGallery','category_id','page_id');
    }

    public function pageVideo()
    {
        return $this->hasMany('App\Youtube','category_id');
    }

}
