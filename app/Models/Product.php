<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;

      protected $fillable  = ['category_id','product_name','product_img','qty','amount','branch_id','status'];

       public function Category(){
   	
    	return $this->belongsTo("App\Models\Category", "category_id");

	} 

	public function Branch(){
   	
    	return $this->belongsTo("App\Models\Branch", "branch_id");

	} 

  public function getProductNameAttribute($value)
    {
        return strtoupper($value);
    }

  public function setProductNameAttribute($value)
    {
        $this->attributes['product_name'] = strtoupper($value);
    }

}
