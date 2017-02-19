<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameCategory extends Model
{
    protected $table = 'game_category';

    protected $fillable = ['game_page_id','title','image','game'];
}
