<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Liveamount;

class CategoryController extends Controller
{
    //

    public function index(){

         $category_list=Category::all();
        return view('admin.Categories.list',compact('category_list'));
    }

    public function store(Request $request){

       Category::create($request->all());

    return redirect()->route('category.index')->with('message','Category Has been added Successfully');
    }

     public function edit(Category $category){

        return view('admin.Categories.edit_category',compact('category'));
    }

     public function update(Request $request,Category $category){


        $category->update(['name'=>$request->name,'status'=>$request->status]);

        return redirect(route('category.index'))->with('message','Category Updated Successfully');
    }

     public function show(Category $category){

        // Todo::where('id',$id)->delete();
         $category->delete();
         Product::where('category_id',$category->id)->delete();
         Liveamount::where('category_id',$category->id)->delete();

         return redirect()->back()->with('error','Category Deleted Has been Successfully');

    }


    public function destory(Category $category){

        // Todo::where('id',$id)->delete();
         $category->delete();

         Product::where('category_id',$category->id)->delete();
         Liveamount::where('category_id',$category->id)->delete();

         return redirect()->back()->with('error','Category Deleted Has been Successfully');

    }

   
}
