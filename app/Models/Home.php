<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    //
    protected $table="users";

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'city',
        'password'
    ];
}
