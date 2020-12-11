<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

     protected $fillable  = ['category_id','product_id','qty','rate','amount','franchisee_id'];


      public function Product(){
   	
    	return $this->belongsTo("App\Models\Product", "product_id");

	} 

	  public function Branch(){
   	
    	return $this->belongsTo("App\Models\Branch", "city");

	} 

	public function Franchisee(){
   	
    	return $this->belongsTo("App\Models\Franchisee", "franchisee_id");

	} 

  public function Category(){
    
      return $this->belongsTo("App\Models\Category", "category_id");

  } 

}
