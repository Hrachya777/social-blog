<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageGallery extends Model
{
    protected $table = 'page_gallery';


    protected $fillable = ['page_id','category_id','image'];

}
