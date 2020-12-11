<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exformrate;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Liveamount;
use App\Models\Order;

class ProfitlossController extends Controller
{
    //
    public function profitloss(){

    	 $exform_rate=Exformrate::where('type','CHICKEN')->sum('rate');
         // $exform_rate=Exformrate::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('rate');

    	 $today_rate=Liveamount::where('product_id','2')->sum('rate');


    	 $product_list_l=Product::where('category_id','1')->where('product_name','live')->get()->all();
        $total_lived_stock='0';
        foreach ($product_list_l as $product) {
        
          $total_lived_stock=Stock::where('product_id',$product->id)->sum('qty'); 

        }

        $product_list_d=Product::where('category_id','1')->where('product_name','dressed')->get()->all();
         $total_dressed_stock='0';
        foreach ($product_list_d as $product) {
        
          $total_dressed_stock=Stock::where('product_id',$product->id)->sum('qty');  

        }

        $pos= Order::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('grandtotal');


        return view('admin.Profit&Loss.list',compact('total_lived_stock','total_dressed_stock','exform_rate','pos','today_rate'));
    
    }
}
