<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interes extends Model
{
    protected $table = 'interes';

    protected $fillable = ['title','description','image'];

    public function pageGallery()
    {
        return $this->hasMany('App\PageGallery','category_id');
    }

    public function pageVideo()
    {
        return $this->hasMany('App\Youtube','category_id');
    }
    
}
