<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscripe extends Model
{
    protected $table = 'subscripe';

    protected $fillable = ['email','question','status'];
    
}
