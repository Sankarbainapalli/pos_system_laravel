<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FranchiseeController extends Controller
{
    //

    public function franchiseeList(){

        return view('admin.franchisees.list');
    }

    public function edit_franchisee(){

        return view('admin.franchisees.edit_franchisee');
    }
}
