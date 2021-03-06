<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;

      protected $fillable  = ['category_id','product_name','qty','amount','branch_id','status'];

       public function Category(){
   	
    	return $this->belongsTo("App\Models\Category", "category_id");

	} 

	public function Branch(){
   	
    	return $this->belongsTo("App\Models\Branch", "branch_id");

	} 

}
