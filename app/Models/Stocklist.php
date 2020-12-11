<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocklist extends Model
{
    use HasFactory;

      // protected $table = 'stocklist';
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
}
