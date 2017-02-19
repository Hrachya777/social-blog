<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
   protected $table = 'youtube';

   
	protected $fillable = ['category_id','page_id','video','width','height', 'article_id','autoplay','info','panel'];
}
