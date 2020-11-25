<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Stock;
use App\Models\Category;
use App\Models\Liveamount;
use App\Models\Exformrate;
use App\Models\Franchisee;

class ReportController extends Controller
{
    Public function live_stock_report(){



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

        return view('admin.Report.live_stock_report',compact('liveamount_list','product_list','stock_list','franchisee_list','total_lived_stock1','total_lived_stock_amt'));


    }

}
