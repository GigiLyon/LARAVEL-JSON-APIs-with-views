<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    function company(){
        return $this->hasMany('App\Models\Comment', 'post_id', 'id');
    }
}
