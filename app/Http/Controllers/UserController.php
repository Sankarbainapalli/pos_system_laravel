<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function userList(){

    	$userlist=User::all();

        return view('admin.users.list',compact('userlist'));
    }
    
}
