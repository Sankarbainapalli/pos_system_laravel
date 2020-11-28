<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Stock;
use App\Models\Category;
use App\Models\Liveamount;
use App\Models\Exformrate;
use App\Models\Franchisee;
use App\Models\Order;
use Auth;

class ReportController extends Controller
{

    Public function live_stock_report(){

        if(Auth::user()->role_id=='SUPERADMIN'){

       $product_list_l=Product::where('product_name','live')->get()->all();

        $total_lived_stock1='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock1=Stock::where('product_id',$product->id)->sum('qty'); 

          $total_lived_stock_amt=Stock::where('product_id',$product->id)->sum('amount'); 

        }

       
        // $category_list=Category::all();
        $liveamount_list=Liveamount::all();
        $product_list=Product::where('product_name','Dressed')->get();


        foreach ($product_list as $products) {

             $stock_list=Stock::where('product_id',$products->id)->get();
        }
    

            $franchisee_list=Franchisee::all();

        }else{

            
       $product_list_l=Product::where('product_name','live')->get()->all();

        $total_lived_stock1='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock1=Stock::where('product_id',Auth::user()->id)->where('product_id',$product->id)->sum('qty'); 

          $total_lived_stock_amt=Stock::where('product_id',Auth::user()->id)->where('product_id',$product->id)->sum('amount'); 

        }

       
        // $category_list=Category::all();
        $liveamount_list=Liveamount::all();
        $product_list=Product::where('product_name','Dressed')->get();


        foreach ($product_list as $products) {

             $stock_list=Stock::where('product_id',Auth::user()->id)->where('product_id',$products->id)->get();
        }
    

            $franchisee_list=Franchisee::all();



        }

        return view('admin.Report.live_stock_report',compact('liveamount_list','product_list','stock_list','franchisee_list','total_lived_stock1','total_lived_stock_amt'));


    }

    public function sales_report(Request $request){

        // dd($request->from_date);

       if(Auth::user()->role_id=='SUPERADMIN'){

        if($request->from_date && $request->to_date){

        $order_list=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        $subtotal=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->sum('subtotal');
        
        $tax=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->sum('tax');

        $grandtotal=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->sum('grandtotal');

    }elseif($request->from_date){

      $order_list=Order::where('created_at',$request->from_date)->get();
        $subtotal=Order::where('created_at',$request->from_date)->sum('subtotal');
        $tax=Order::where('created_at',$request->from_date)->sum('tax');
        $grandtotal=Order::where('created_at',$request->from_date)->sum('grandtotal');

    }elseif($request->to_date){

      $order_list=Order::where('created_at',$request->to_date)->get();
        $subtotal=Order::where('created_at',$request->to_date)->sum('subtotal');
        $tax=Order::where('created_at',$request->to_date)->sum('tax');
        $grandtotal=Order::where('created_at',$request->to_date)->sum('grandtotal');

      }else{

        $order_list=Order::all();
        $subtotal=Order::sum('subtotal');
        $tax=Order::sum('tax');
        $grandtotal=Order::sum('grandtotal');

      }
    }else{

         if($request->from_date && $request->to_date){

        $order_list=Order::where('user_id',Auth::user()->id)->whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        $subtotal=Order::where('user_id',Auth::user()->id)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('subtotal');
        
        $tax=Order::where('user_id',Auth::user()->id)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('tax');

        $grandtotal=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->sum('grandtotal');

    }elseif($request->from_date){

      $order_list=Order::where('user_id',Auth::user()->id)->where('created_at',$request->from_date)->get();
        $subtotal=Order::where('user_id',Auth::user()->id)->where('created_at',$request->from_date)->sum('subtotal');
        $tax=Order::where('user_id',Auth::user()->id)->where('created_at',$request->from_date)->sum('tax');
        $grandtotal=Order::where('created_at',$request->from_date)->sum('grandtotal');

    }elseif($request->to_date){

      $order_list=Order::where('user_id',Auth::user()->id)->where('created_at',$request->to_date)->get();
        $subtotal=Order::where('user_id',Auth::user()->id)->where('created_at',$request->to_date)->sum('subtotal');
        $tax=Order::where('user_id',Auth::user()->id)->where('created_at',$request->to_date)->sum('tax');
        $grandtotal=Order::where('created_at',$request->to_date)->sum('grandtotal');

      }else{

        $order_list=Order::where('user_id',Auth::user()->id)->get()->all();
        $subtotal=Order::where('user_id',Auth::user()->id)->sum('subtotal');
        $tax=Order::where('user_id',Auth::user()->id)->sum('tax');
        $grandtotal=Order::where('user_id',Auth::user()->id)->sum('grandtotal');

      }

    }

        return view('admin.Report.sales',compact('order_list','subtotal','tax','grandtotal'));
    }

}
