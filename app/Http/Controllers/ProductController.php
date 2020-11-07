<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Branch;

class ProductController extends Controller
{
    //

    public function productList(){

    	$product_list=Product::all();
    	$category_list=Category::all();
    	$branch_list=Branch::all();

        return view('admin.products.list',compact('product_list','category_list','branch_list'));
    }

     public function store(Request $request){

        // dd($request->all());

       Product::create($request->all());

    return redirect()->route('productList')->with('message','product Has been added Successfully');
    }

     public function edit(Product $product){

        return view('admin.products.edit_product',compact('product'));
    }

     public function update(Request $request,Product $product){


        $product->update($request->all());
        // $product->update(['name'=>$request->name,'status'=>$request->status]);

        return redirect(route('productList'))->with('message','product Updated Successfully');
    }

    public function destory(Product $product){

        // Todo::where('id',$id)->delete();
         $product->delete();

         return redirect()->back()->with('error','product Deleted Has been Successfully');

    }

    // public function edit_product(){

    //     return view('admin.products.edit_product');
    // }
}
