<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Franchisee;
use App\Models\Exformrate;
use App\Models\Liveamount;
use App\Models\Order;
use App\Models\Orderitem;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {    


        if(Auth::user()->role_id == 'SUPERADMIN'){

            // $today_rate=Exformrate::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('rate');
            $today_rate=Exformrate::where('type','CHICKEN')->sum('rate');

         
           $total_emp=User::count();
           $product_list_l=Product::where('category_id','1')->where('product_name','LIVE')->get()->all();

            $total_lived_stock='0';
            foreach ($product_list_l as $product) {

              $total_lived_stock=Stock::where('product_id',$product->id)->sum('qty');  

            }

            $product_list_d=Product::where('category_id','1')->where('product_name','dressed')->get()->all();
             $total_dressed_stock='0';
            foreach ($product_list_d as $product) {

              $total_dressed_stock=Stock::where('product_id',$product->id)->sum('qty'); 
              
              $total_order_qty=Orderitem::where('item_name',$product->id)->sum('qty');  

            }


        // $total_lived_stock=$total_lived_stock1;
        $dres_stock=$total_dressed_stock;

        $total_franchisee=Franchisee::count();
        $no_of_sales=Order::count('id');
        $total_sales=Order::sum('grandtotal');
         $today_sale=Order::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('grandtotal'); 
        $today_nf_sales=Order::where('created_at', '>=', date('Y-m-d').' 00:00:00')->count('id');


    }else{

    // if(Auth::user()->role_id == 'FRANCHISEEOWNER' ){

        $today_rate=Liveamount::where('product_id','2')->where('branch_id',Auth::user()->frans_id)->sum('rate');

         // ->where('created_at', '>=', date('Y-m-d').' 00:00:00')

        $total_emp=User::where('frans_id', Auth::user()->frans_id)->count();

        $product_list_l=Product::where('category_id','1')->where('product_name','LIVE')->get()->all();
        
        $total_lived_stock1='0';
        foreach ($product_list_l as $product) {
        
        $total_lived_stock1=Stock::where('product_id',$product->id)->where('franchisee_id',Auth::user()->frans_id)->sum('qty'); 

         $total_order_qty=Orderitem::where('item_name',$product->id)->where('user_id',Auth::user()->id)->sum('qty');

        }

        $product_list_d=Product::where('category_id','1')->where('product_name','DRESSED')->get()->all();
         $total_dressed_stock='0';
 

        foreach ($product_list_d as $product) {
        
       
          $total_dressed_stock=Stock::where('product_id',$product->id)->where('franchisee_id',Auth::user()->frans_id)->sum('qty');  

          $total_order_qty=Orderitem::where('item_name',$product->id)->where('user_id',Auth::user()->id)->sum('qty'); 

        }


      
         $total_lived_stock=$total_lived_stock1;
            $dres_stock=$total_dressed_stock;

        $total_franchisee=" ";

        $no_of_sales=Order::where('user_id', Auth::user()->id)->count('id');
         $today_nf_sales=Order::where('created_at', '>=', date('Y-m-d').' 00:00:00')->count('id');

        $total_sales=Order::where('user_id', Auth::user()->id)->sum('grandtotal');

        $today_sale=Order::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('grandtotal'); 
 
    }


    return view('admin.dashboard',compact('total_emp','total_dressed_stock','total_lived_stock','total_franchisee','today_rate','total_sales','no_of_sales','dres_stock','today_nf_sales','today_sale'));
      
    }


}
