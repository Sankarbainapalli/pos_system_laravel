<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function accountList(){

        return view('admin.Accounts.list');
    }

    public function edit(){

        return view('admin.Accounts.edit');
    }
}
