<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Branch;

class Franchisee extends Model
{
    use HasFactory;

        protected $fillable  = ['name','addhar_no','ref_id','account_no','mobile','city','start_date','remarks','address','user_name','password'];

        public function Branch(){
   	
    	return $this->belongsTo("App\Models\Branch", "city");

	} 
}
