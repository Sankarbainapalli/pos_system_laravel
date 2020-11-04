<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    //

    public function branchList(){

        return view('admin.branches.list');
    }
}
