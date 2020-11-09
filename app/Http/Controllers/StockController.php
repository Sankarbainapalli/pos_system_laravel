<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    //

    public function index(){

        return view('admin.Stocks.list');
    }

    // public function edit_stock(){

    //     return view('admin.Stocks.edit_stock');
    // }
}
