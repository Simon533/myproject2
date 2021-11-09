<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable =['serial_number','model','category_id','sales_price','unit_id'];
    public $timestamps= true;
    
 

 
     public function sale(){
         return $this->hasMany('App\Sale');
     }
 
     public function invoice(){
         return $this->belongsToMany('App\Invoice');
     }
}
