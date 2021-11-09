<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $timestamps= true;
     public function sale(){
        return $this->hasMany('App\Sales');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
}
}