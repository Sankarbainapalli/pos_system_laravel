<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exformrate extends Model
{
    use HasFactory;

     protected $fillable  = ['type','rate','cur_date'];

       public function Category(){
   	
    	return $this->belongsTo("App\Models\Category", "type");

	} 

}
