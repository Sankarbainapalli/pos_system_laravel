<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liveamount extends Model
{
    use HasFactory;

    protected $fillable  = ['category_id','product_id','rate','ratedate'];

      public function Category(){
   	
    	return $this->belongsTo("App\Models\Category", "category_id");

	} 

	  public function Product(){
   	
    	return $this->belongsTo("App\Models\Product", "product_id");

	} 

}
