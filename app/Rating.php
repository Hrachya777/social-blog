<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'reating';

    protected $fillable = ['user_id','page_id','category_id','rating'];
}
