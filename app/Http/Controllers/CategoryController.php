<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function categoryList(){

    		$category_list=Category::all();
        return view('admin.categories.list',compact('category_list'));
    }

    public function store(Request $request){

       Category::create($request->all());

    return redirect()->route('categoryList')->with('message','Category Has been added Successfully');
    }

    public function destory(Category $category){

        // Todo::where('id',$id)->delete();
         $category->delete();

         return redirect()->back()->with('error','Category Deleted Has been Successfully');

    }
}