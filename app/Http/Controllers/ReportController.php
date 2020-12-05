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
use App\Models\User;
use App\Models\Stocklist;
use Auth;
use DB;

class ReportController extends Controller
{

    Public function live_stock_report(){

        if(Auth::user()->role_id=='SUPERADMIN'){

        $product_list_l=Product::where('product_name','LIVE')->get()->all();

        $total_lived_stock1='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock1=Stocklist::where('product_id',$product->id)->sum('qty'); 

          $total_lived_stock_amt=Stocklist::where('product_id',$product->id)->sum('amount'); 

        }

       
        // $category_list=Category::all();
        $liveamount_list=Liveamount::all();
        $product_list=Product::where('product_name','LIVE')->get()->all();

        foreach ($product_list as $products) {

           $stock_list=Stocklist::where('product_id',$products->id)->get();
        }


         $franchisee_list=Franchisee::all();

        }else{

            
        $product_list_l=Product::where('product_name','LIVE')->get()->all();

        $total_lived_stock1='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock1=Stocklist::where('franchisee_id',Auth::user()->frans_id)->where('product_id',$product->id)->sum('qty'); 

          $total_lived_stock_amt=Stocklist::where('franchisee_id',Auth::user()->frans_id)->where('product_id',$product->id)->sum('amount'); 

        }

       
        // $category_list=Category::all();
        $liveamount_list=Liveamount::all();
        $product_list=Product::where('product_name','LIVE')->get();


        foreach ($product_list as $products) {

           $stock_list=Stocklist::where('franchisee_id',Auth::user()->frans_id)->where('product_id',$products->id)->get();
        }
    

            $franchisee_list=Franchisee::all();



        }

        return view('admin.Report.live_stock_report',compact('liveamount_list','product_list','stock_list','franchisee_list','total_lived_stock1','total_lived_stock_amt'));


    }

    Public function dressed_stock_report(){

        if(Auth::user()->role_id=='SUPERADMIN'){

        $product_list_l=Product::where('product_name','DRESSED')->get()->all();

        $total_lived_stock1='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock1=Stocklist::where('product_id',$product->id)->sum('qty'); 

          $total_lived_stock_amt=Stocklist::where('product_id',$product->id)->sum('amount'); 

        }

       
        // $category_list=Category::all();
        $liveamount_list=Liveamount::all();
        $product_list=Product::where('product_name','DRESSED')->get()->all();

        foreach ($product_list as $products) {

           $stock_list=Stocklist::where('product_id',$products->id)->get();
        }


         $franchisee_list=Franchisee::all();

        }else{

            
       $product_list_l=Product::where('product_name','DRESSED')->get()->all();

        $total_lived_stock1='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock1=Stocklist::where('franchisee_id',Auth::user()->frans_id)->where('product_id',$product->id)->sum('qty'); 

          $total_lived_stock_amt=Stocklist::where('franchisee_id',Auth::user()->frans_id)->where('product_id',$product->id)->sum('amount'); 

        }

       
        // $category_list=Category::all();
        $liveamount_list=Liveamount::all();
        $product_list=Product::where('product_name','DRESSED')->get();


        foreach ($product_list as $products) {

             $stock_list=Stocklist::where('franchisee_id',Auth::user()->frans_id)->where('product_id',$products->id)->get();
        }
    

            $franchisee_list=Franchisee::all();


        }

        return view('admin.Report.dressed_stock_report',compact('liveamount_list','product_list','stock_list','franchisee_list','total_lived_stock1','total_lived_stock_amt'));


    }

    public function sales_report(Request $request){

        // dd($request->from_date);

       if(Auth::user()->role_id=='SUPERADMIN'){

         $franchisee_list=User::all();
         // $franchisee_list=User::groupBy('frans_id')->get()->all();

         //  $query="SELECT *, fr.name as fra_name, usr.id as use_id FROM `franchisees` as fr INNER JOIN users as usr on fr.id=usr.frans_id  GROUP BY usr.frans_id ";

         // return $franchisee_list=DB::select(DB::raw($query));  

         if($request->user_id && $request->payment_method && $request->from_date && $request->to_date){

           // return "Branch and Payment and from and to selected";

        $order_list=Order::where('user_id',$request->user_id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        $subtotal=Order::where('user_id',$request->user_id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('subtotal');
        
        $tax=Order::where('user_id',$request->user_id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('tax');

        $grandtotal=Order::where('user_id',$request->user_id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('grandtotal');

    }elseif($request->payment_method && $request->from_date && $request->to_date){

             // return "Payment and from and to selected";


        $order_list=Order::where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        $subtotal=Order::where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('subtotal');
        
        $tax=Order::where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('tax');

        $grandtotal=Order::where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('grandtotal');

    }elseif($request->from_date && $request->to_date){

       // return "from and to selected";

        $order_list=Order::where()->whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        $subtotal=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->sum('subtotal');
        
        $tax=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->sum('tax');

        $grandtotal=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->sum('grandtotal');

    }elseif($request->user_id){

      // return "branch selected";

      $order_list=Order::where('user_id',$request->user_id)->get();
        $subtotal=Order::where('user_id',$request->user_id)->sum('subtotal');
        $tax=Order::where('user_id',$request->user_id)->sum('tax');
        $grandtotal=Order::where('user_id',$request->user_id)->sum('grandtotal');

    }elseif($request->payment_method){

      // return   "Payment selected";

      $order_list=Order::where('payment_method',$request->payment_method)->get();
        $subtotal=Order::where('payment_method',$request->payment_method)->sum('subtotal');
        $tax=Order::where('payment_method',$request->payment_method)->sum('tax');
        $grandtotal=Order::where('payment_method',$request->payment_method)->sum('grandtotal');

    }elseif($request->from_date){

        // return   "From selected";

      $order_list=Order::where('created_at',$request->from_date)->get();
        $subtotal=Order::where('created_at',$request->from_date)->sum('subtotal');
        $tax=Order::where('created_at',$request->from_date)->sum('tax');
        $grandtotal=Order::where('created_at',$request->from_date)->sum('grandtotal');

    }elseif($request->to_date){

        // return   "To selected";

        $order_list=Order::where('created_at',$request->to_date)->get();
        $subtotal=Order::where('created_at',$request->to_date)->sum('subtotal');
        $tax=Order::where('created_at',$request->to_date)->sum('tax');
        $grandtotal=Order::where('created_at',$request->to_date)->sum('grandtotal');

      }else{

        // return   "ALL selected";

        $order_list=Order::all();
        $subtotal=Order::sum('subtotal');
        $tax=Order::sum('tax');
        $grandtotal=Order::sum('grandtotal');

      }
    }else{

        $franchisee_list=User::where('id',Auth::user()->id)->get()->all();

         if($request->user_id && $request->payment_method && $request->from_date && $request->to_date){

        $order_list=Order::where('user_id',$request->user_id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        $subtotal=Order::where('user_id',$request->user_id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('subtotal');
        
        $tax=Order::where('user_id',$request->user_id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('tax');

        $grandtotal=Order::where('user_id',$request->user_id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('grandtotal');

    }elseif($request->payment_method && $request->from_date && $request->to_date){

        $order_list=Order::where('user_id',Auth::user()->id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        $subtotal=Order::where('user_id',Auth::user()->id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('subtotal');
        
        $tax=Order::where('user_id',Auth::user()->id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('tax');

        $grandtotal=Order::where('user_id',Auth::user()->id)->where('payment_method',$request->payment_method)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('grandtotal');

    }elseif($request->from_date && $request->to_date){

        $order_list=Order::where('user_id',Auth::user()->id)->whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        $subtotal=Order::where('user_id',Auth::user()->id)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('subtotal');
        
        $tax=Order::where('user_id',Auth::user()->id)->whereBetween('created_at', [$request->from_date, $request->to_date])->sum('tax');

        $grandtotal=Order::whereBetween('created_at', [$request->from_date, $request->to_date])->sum('grandtotal');

    }elseif($request->payment_method){

      $order_list=Order::where('user_id',Auth::user()->id)->where('payment_method',$request->payment_method)->get();
        $subtotal=Order::where('user_id',Auth::user()->id)->where('payment_method',$request->payment_method)->sum('subtotal');
        $tax=Order::where('user_id',Auth::user()->id)->where('payment_method',$request->payment_method)->sum('tax');
        $grandtotal=Order::where('user_id',Auth::user()->id)->where('payment_method',$request->payment_method)->sum('grandtotal');

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

        return view('admin.Report.sales',compact('franchisee_list','order_list','subtotal','tax','grandtotal'));
    }

}
