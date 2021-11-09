<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
     protected $fillable = [
        'name',
        'mobile',
        'address',
        'locations',
        'products',       
    ];
}
