<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

 protected $fillable  = ['cust_id','cus_name','cus_email','cus_mobile','total_items','subtotal','discount','tax','grandtotal','payment_method','card_number','paid_amt','return_change','user_id'];
 
}
