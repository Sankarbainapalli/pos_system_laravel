<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Liveamount;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Exformrate;
use App\Models\Franchisee;

class StockController extends Controller
{

    public function index(Request $request){

         $product_id =  $request->session()->get('product_id');


    	$category_list=Category::all();
    	$liveamount_list=Liveamount::all();
        $product_list=Product::all();
        $stock_list=Stock::all();
        $stock_sum=Stock::where('created_at', '>=', date('Y-m-d').' 00:00:00')->where('product_id',$product_id)->sum('amount');
        $product_rate=Liveamount::where('product_id',$product_id)->get()->all();

        return view('admin.Stocks.list',compact('liveamount_list','product_list','product_rate','product_id','stock_list','stock_sum'));
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

          $directoryURI = $_SERVER['REQUEST_URI'];

                           $path = parse_url($directoryURI, PHP_URL_PATH);

                           $components = explode('/', $path);
                            // var_dump($components);exit();
                          $first_part = $components[2];

       return redirect()->back()->with('message','stock Has been added Successfully');
    }


    public function dressed_stock(Request $request){

         $product_id =  $request->session()->get('product_id');

        // $category_list=Category::all();
        $liveamount_list=Liveamount::all();
        $product_list=Product::where('product_name','Dressed')->get();

        $stock_sum=Stock::where('created_at', '>=', date('Y-m-d').' 00:00:00')->where('product_id',$product_id)->sum('amount');

        foreach ($product_list as $products) {

             $stock_list=Stock::where('product_id',$products->id)->get();
        }
    
        $product_rate=Liveamount::where('product_id',$product_id)->get()->all();

            $franchisee_list=Franchisee::all();

        return view('admin.Stocks.dressed_stock.list',compact('liveamount_list','product_list','product_rate','product_id','stock_list','stock_sum','franchisee_list'));
    }


     public function lived_stock(Request $request){

         $product_id =  $request->session()->get('product_id');

        $liveamount_list=Liveamount::all();
        $franchisee_list=Franchisee::all();

      $product_list=Product::where('product_name','live')->get()->all();

        $stock_sum=Stock::where('created_at', '>=', date('Y-m-d').' 00:00:00')->where('product_id',$product_id)->sum('amount');

        foreach ($product_list as $products) {

             $stock_list=Stock::where('product_id',$products->id)->get();
           }
    
        $product_rate=Exformrate::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('rate');


        return view('admin.Stocks.lived_stock.list',compact('liveamount_list','product_list','product_rate','product_id','stock_list','stock_sum','franchisee_list'));
    }



     public function show(Stock $stock){

        // Todo::where('id',$id)->delete();
         $stock->delete();

         return redirect()->back()->with('error','Stock Deleted Has been Successfully');

    }

    public function edit(Stock $stock){

        // dd($stock->id);

         
        
        return view('admin.stocks.edit_stock',compact('stock'));
    }

     public function update(Request $request,Stock $stock){

        $db_qty= Stock::where('id',$stock->id)->sum('qty');

        $total_qty=$db_qty+$request->qty;

        $stock->update(['qty'=>$total_qty]);

        return redirect()->back()->with('message','Stock Updated Successfully');
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
