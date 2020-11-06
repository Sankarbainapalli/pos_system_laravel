<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function productList(){

        return view('admin.products.list');
    }

    public function edit_product(){

        return view('admin.products.edit_product');
    }
}
