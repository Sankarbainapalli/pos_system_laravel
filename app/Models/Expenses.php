<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $fillable  = ['franchisee_id','cur_date','name','mobile','email','purpose','amount','in_words','payment_mode'];
}
