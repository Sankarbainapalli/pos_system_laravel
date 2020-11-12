<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Liveamount;

class StockController extends Controller
{
    //

    public function index(){

    	$category_list=Category::all();
    	$liveamount_list=Liveamount::all();

        return view('admin.Stocks.list',compact('category_list','liveamount_list'));
    }

    public function store(Request $request){

    	// dd($request->all());

         Role::create($request->all());

       return redirect()->route('role.index')->with('message','Role Has been added Successfully');
    }


    // public function edit_stock(){

    //     return view('admin.Stocks.edit_stock');
    // }
}
