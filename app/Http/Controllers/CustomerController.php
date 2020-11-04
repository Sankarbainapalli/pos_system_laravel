<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function customerList(){

        return view('admin.customers.list');
    }
}


