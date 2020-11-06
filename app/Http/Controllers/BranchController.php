<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    //

    public function branchList(){

        return view('admin.branches.list');
    }

    public function edit_branch(){

        return view('admin.branches.edit_branch');
    }
}
