<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    // public function userList(){

<<<<<<< HEAD
    	$userlist=User::all();

        return view('admin.users.list',compact('userlist'));
    }
    
=======
    //     return view('admin.users.list');
    // }
>>>>>>> vishal
}
