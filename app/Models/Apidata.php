<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apidata extends Model
{
    use HasFactory;

      protected $fillable  = ['branch_id','machine_id','post','total_weight'];
}
