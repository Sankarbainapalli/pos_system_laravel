<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // use HasFactory;

    // protected $table = "customers";
     protected $fillable  = ['name','location','mobile'];


       public function User(){
   	
    	return $this->belongsTo("App\Models\User", "user_id");

	} 

	 public function Franchisee(){
   	
    	return $this->belongsTo("App\Models\Franchisee", "frans_id");

	} 

	 public function Branch(){
   	
    	return $this->belongsTo("App\Models\Branch", "city");

	} 

}
