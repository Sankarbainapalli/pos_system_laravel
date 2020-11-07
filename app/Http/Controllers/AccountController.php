<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function accountList(){

        return view('admin.accounts.list');
    }

    public function edit(){

        return view('admin.accounts.edit');
    }
}
