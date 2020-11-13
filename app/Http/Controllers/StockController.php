<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Liveamount;
use App\Models\Product;
use App\Models\Stock;

class StockController extends Controller
{
    //

    public function index(Request $request){

         $product_id =  $request->session()->get('product_id');


    	$category_list=Category::all();
    	$liveamount_list=Liveamount::all();
        $product_list=Product::all();
        $stock_list=Stock::all();
        $stock_sum=Stock::where('created_at', '>=', date('Y-m-d').' 00:00:00')->where('product_id',$product_id)->sum('amount');
        $product_rate=Liveamount::where('product_id',$product_id)->get()->all();

        return view('admin.Stocks.list',compact('category_list','liveamount_list','product_list','product_rate','product_id','stock_list','stock_sum'));
    }

     function getRate(Request $request){

   $request->session()->put('product_id', $request->product_id);

   //  $product_rate=Liveamount::where('product_id',$request->product_id)->get()->all();

   // echo json_encode($product_rate);

    echo 'SUCCESS';
  }

    public function store(Request $request){

    	// dd($request->all());

         Stock::create($request->all());

       return redirect()->route('stock.index')->with('message','stock Has been added Successfully');
    }

     public function show(Stock $stock){

        // Todo::where('id',$id)->delete();
         $stock->delete();

         return redirect()->back()->with('error','Stock Deleted Has been Successfully');

    }

    public function edit(Stock $stock){
        
        return view('admin.stocks.edit_stock',compact('stock'));
    }

     public function update(Request $request,Stock $stock){



        $stock->update(['qty'=>$request->qty]);

        return redirect(route('stock.index'))->with('message','Stock Updated Successfully');
    }

    public function destroy(Stock $stock){

        // Todo::where('id',$id)->delete();
         $Stock->delete();

         return redirect()->back()->with('error','Stock Deleted Has been Successfully');

    }


    // public function edit_stock(){

    //     return view('admin.Stocks.edit_stock');
    // }
}
