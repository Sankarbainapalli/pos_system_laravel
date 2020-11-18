<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaseorder extends Model
{
    use HasFactory;

      protected $fillable  = ['branch_id','franchisee_id','qty','rate','total_amount','sup_name','sup_mobile','pur_date'];

      public function Branch(){
   	
    	return $this->belongsTo("App\Models\Branch", "branch_id");

	} 

	public function Franchisee(){
   	
    	return $this->belongsTo("App\Models\Franchisee", "franchisee_id");

	} 
}
