<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageGame extends Model
{
    protected $table = 'page_game';

    protected $fillable = ['name','image'];
}
