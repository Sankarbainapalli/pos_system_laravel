<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;

     protected $fillable  = ['order_id','item_name','qty','cur_rate','rate_array'];
}
