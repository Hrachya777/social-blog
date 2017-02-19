<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = ['user_id','page_id','category_id','comment'];


    public function usercomment()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
