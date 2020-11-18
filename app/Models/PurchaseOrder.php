<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaseorder extends Model
{
    use HasFactory;

      protected $fillable  = ['branch_id','franchisee_id','qty','rate','total_amount','sup_name','sup_mobile','pur_date'];
}
