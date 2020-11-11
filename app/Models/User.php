<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\Franchisee;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'role_id',
        'frans_id',
        'user_id',
        'status',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
    
        return $this->belongsTo("App\Models\Role", "role_id");

    } 

public function franchisee(){
    
        return $this->belongsTo("App\Models\Franchisee", "frans_id");

    } 
    // public function getPasswordAttribute($password)
    // {
    //     // return bcrypt($password);

    //     $this->attributes['password']=Crypt::encryptString($password);
    // }

    // public function getPasswordAttribute($password){

    //     return encrypt($password);
    // }
}
