<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

     protected $fillable  = ['product_id','qty','rate','amount'];


      public function Product(){
   	
    	return $this->belongsTo("App\Models\Product", "product_id");

	} 

}
