<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DressedStock extends Model
{
    use HasFactory;

     protected $fillable  = ['type','qty','cur_date'];
}
