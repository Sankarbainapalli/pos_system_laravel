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

    // $today_rate=Exformrate::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('rate');
    $today_rate=Liveamount::where('product_id','1')->where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('rate');

        $total_emp=User::count();
        $product_list_l=Product::where('product_name','live')->get()->all();
        $total_lived_stock1='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock1=Stock::where('product_id',$product->id)->sum('qty');  

        }

        $product_list_d=Product::where('product_name','dressed')->get()->all();
         $total_dressed_stock='0';
        foreach ($product_list_d as $product) {
        
          $total_dressed_stock=Stock::where('product_id',$product->id)->sum('qty');  

        }

        $total_lived_stock=$total_lived_stock1-$total_dressed_stock;

        

        // $total_dressed_stock=Stock::where('')count();
        $total_franchisee=Franchisee::count();
        $no_of_sales=Order::count('id');
        $total_sales=Order::sum('grandtotal');

        return view('admin.dashboard',compact('total_emp','total_dressed_stock','total_lived_stock','total_franchisee','today_rate','total_sales','no_of_sales'));
    }

    // public function dashboard()
    // {
    //     $total_emp=User::count();
    //     return view('admin.dashboard',compact('total_emp'));
    // }
}
