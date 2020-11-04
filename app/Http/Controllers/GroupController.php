<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    //

    public function groupList(){

        return view('admin.Groups.list');
    }
}
