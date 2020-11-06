<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function categoryList(){

        return view('admin.categories.list');
    }

    public function edit_category(){

        return view('admin.categories.edit_category');
    }
}
