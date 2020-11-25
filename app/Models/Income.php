<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable  = ['source_from','cur_date','name','mobile','email','purpose','amount','in_words','payment_mode'];
}
