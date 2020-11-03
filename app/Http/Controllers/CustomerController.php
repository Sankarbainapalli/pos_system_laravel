<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function customers_list(){

        return view('admin.customers.list');
    }
}


