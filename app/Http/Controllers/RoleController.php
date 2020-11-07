<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //

    public function roleList(){

        return view('admin.roles.list');
    }

    public function edit_role(){

        return view('admin.roles.edit_role');
    }
}
