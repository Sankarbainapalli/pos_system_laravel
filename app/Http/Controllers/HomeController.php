<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Franchisee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {    
        $total_emp=User::count();
        $product_list_l=Product::where('product_name','live')->get()->all();
        $total_lived_stock='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock=Stock::where('product_id',$product->id)->sum('qty');  

        }

        $product_list_d=Product::where('product_name','dressed')->get()->all();
         $total_dressed_stock='0';
        foreach ($product_list_d as $product) {
        
          $total_dressed_stock=Stock::where('product_id',$product->id)->sum('qty');  

        }
        
        // $total_dressed_stock=Stock::where('')count();
        $total_franchisee=Franchisee::count();
        return view('admin.dashboard',compact('total_emp','total_dressed_stock','total_lived_stock','total_franchisee'));
    }

    // public function dashboard()
    // {
    //     $total_emp=User::count();
    //     return view('admin.dashboard',compact('total_emp'));
    // }
}
