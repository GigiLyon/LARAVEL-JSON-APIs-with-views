<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocean extends Model
{
    // protected $table = 'pln_plans'; 
    public $timestamps = false;

    protected $fillable = [
        'name',
        'color',
        'artist'
    ];

}
