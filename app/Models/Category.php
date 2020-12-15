<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;
    protected $fillable  = ['name','status'];

     public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

  public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
    
}
