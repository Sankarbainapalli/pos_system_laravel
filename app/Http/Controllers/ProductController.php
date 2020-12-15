<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;
use App\Models\Branch;
use App\Models\Cart;
use App\Models\Liveamount;
use App\Models\Stock;
use App\Models\Stocklist;

class ProductController extends Controller
{
    //

    public function index(){

    	$product_list=Product::all();
    	$category_list=Category::all();
    	$branch_list=Branch::all();

        return view('admin.Products.list',compact('product_list','category_list','branch_list'));
    }

     public function store(Request $request){

            // dd(uppercase($request->product_name));
        $product=new Product;
        $product->category_id=$request->category_id;
        $product->product_name=$request->product_name;


        if($request->hasFile('product_img')){
 
        $product_img = $request->product_name.'product'.time().'.'.request()->product_img->getClientOriginalExtension();

       request()->product_img->storeAs('public/product', $product_img);

        $product->product_img=$product_img;
        }

        $product->save();
   
       // Product::create($request->all());

    return redirect()->route('product.index')->with('message','product Has been added Successfully');
    }

     public function edit(Product $product){

        $category_list=Category::all();
        $branch_list=Branch::all();
        
        return view('admin.Products.edit_product',compact('product','category_list','branch_list'));
    }

     public function update(Request $request,Product $product){

       //  $product = new Product::find($product);
       //  $product->category_id=$request->category_id;
       //  $product->product_name=$request->product_name;
 

       //    if($request->hasFile('product_img')){

       //   $img = $request->product_img.'product'.time().'.'.request()->img->getClientOriginalExtension();

       // request()->img->storeAs('public/product', $img);

       //   Storage::delete('public/product/'.$product->product_img); 

       //    $product->product_img =$img;
         
       //  }

       //  $product->save();

        if($request->hasFile('product_img')){

         $img = $request->product_name.'product'.time().'.'.request()->product_img->getClientOriginalExtension();

       request()->product_img->storeAs('public/product', $img);

         Storage::delete('public/product/'.$product->product_img); 

          // $product->product_img =$img;

           }


        // $product->update($request->all());

        $product->update(['category_id'=>$request->category_id,'product_name'=>$request->product_name,'product_img'=>$img]);

        return redirect(route('product.index'))->with('message','product Updated Successfully');
    }

     public function show(Product $product){

        // Todo::where('id',$id)->delete();
         $product->delete();
         Liveamount::where('product_id',$product->id)->delete();
         Cart::where('product_id',$product->id)->delete();
         Stocklist::where('product_id',$product->id)->delete();
         Stock::where('product_id',$product->id)->delete();



         return redirect()->back()->with('error','product Deleted Has been Successfully');

    }

    public function destroy(Product $product){

        // Todo::where('id',$id)->delete();
         $product->delete();
         Liveamount::where('product_id',$product->id)->delete();
         Cart::where('product_id',$product->id)->delete();
         Stocklist::where('product_id',$product->id)->delete();
         Stock::where('product_id',$product->id)->delete();

         return redirect()->back()->with('error','product Deleted Has been Successfully');

    }

    // public function edit_product(){

    //     return view('admin.products.edit_product');
    // }
}
