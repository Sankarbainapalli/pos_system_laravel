<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Liveamount;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Exformrate;
use App\Models\Franchisee;
use App\Models\Stocklist;
use Auth;

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

         $total_count=Stock::where('product_id',$request->product_id)->where('franchisee_id',$request->franchisee_id)->count();

        //  print_r($total_count);return;

        if($total_count==0){

            $stock=new Stock;
            $stock->product_id=$request->product_id;
            $stock->qty=$request->qty;
            $stock->rate=$request->rate;
            $stock->amount=$request->amount;
            $stock->franchisee_id=$request->franchisee_id;
            $stock->save();

            Stocklist::create($request->all());

            if($request->product_id=='2'){

             $live_stock=Stock::where('product_id',1)->where('franchisee_id',$request->franchisee_id)->sum('qty');

                 $update_livestock=$live_stock-$request->qty;

              Stock::where('product_id','1')->where('franchisee_id',$request->franchisee_id)->update(['qty' => ($update_livestock)]);
          }

        }else{

           // $update_stock=$total_stock+$request->qty;
            // Stock::where('product_id',$request->product_id)->where('franchisee_id',$request->franchisee_id)->update(['qty' => ($update_stock)]);

            if($request->product_id=='1'){


                $live_stock=Stock::where('product_id','1')->where('franchisee_id',$request->franchisee_id)->sum('qty');

                 $update_livestock=$live_stock+$request->qty;

          
              Stock::where('product_id',$request->product_id)->where('franchisee_id',$request->franchisee_id)->update(['qty' => ($update_livestock)]);

                Stocklist::create($request->all()); //Create Stock list in this model for report
            }

             if($request->product_id=='2'){

                Stocklist::create($request->all());

              $live_stock=Stock::where('product_id','1')->where('franchisee_id',$request->franchisee_id)->sum('qty');

                 $update_livestock=$live_stock-$request->qty; 

              Stock::where('product_id','1')->where('franchisee_id',$request->franchisee_id)->update(['qty' => ($update_livestock)]); // Update Live Stock

               $dressed_stock=Stock::where('product_id',$request->product_id)->where('franchisee_id',$request->franchisee_id)->sum('qty');

                 $update_dressed_stock=$dressed_stock+$request->qty;

             Stock::where('product_id',$request->product_id)->where('franchisee_id',$request->franchisee_id)->update(['qty' => ($update_dressed_stock)]); //update Dressed Stock

            }


            // Stock::where('product_id',$request->product_id)->where('franchisee_id',$request->franchisee_id)->update(['qty' => ($update_stock)]);
        }

              
       return redirect()->back()->with('message','stock Has been added Successfully');
    }


    public function dressed_stock(Request $request){

         $product_id =  $request->session()->get('product_id');
          // $product_id =  $request->product_id;

        // $category_list=Category::all();
        $liveamount_list=Liveamount::all();

         $product_list=Product::where('product_name','DRESSED')->get();

        $stock_sum=Stock::where('created_at', '>=', date('Y-m-d').' 00:00:00')->where('product_id',$product_id)->sum('amount');


        // foreach ($product_list as $products) {

        //      $stock_list=Stock::where('product_id',$products->id)->get();
        // }

         if(Auth::user()->role_id == 'SUPERADMIN'){

        foreach ($product_list as $products) {

             $stock_list=Stock::where('product_id',$products->id)->get();

              }

                }else{

                    foreach ($product_list as $products) {

                 $stock_list=Stock::where('product_id',$products->id)->where('franchisee_id',Auth::user()->frans_id)->get();
                 }

                  }

    
        $product_rate=Liveamount::where('created_at', '>=', date('Y-m-d').' 00:00:00')->where('product_id',$product_id)->orderBy('id', 'DESC')->limit(1)->get();

        // $product_rate=Exformrate::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('rate');

         $franchisee_list=Franchisee::all();

        return view('admin.Stocks.dressed_stock.list',compact('liveamount_list','product_list','product_rate','product_id','stock_list','stock_sum','franchisee_list'));
    }


     public function lived_stock(Request $request){

         $product_id =  $request->session()->get('product_id');

        $liveamount_list=Liveamount::all();
        $franchisee_list=Franchisee::all();

      $product_list=Product::where('product_name','LIVE')->get()->all();

        $stock_sum=Stock::where('created_at', '>=', date('Y-m-d').' 00:00:00')->where('product_id',$product_id)->sum('amount');

         if(Auth::user()->role_id == 'SUPERADMIN'){

        foreach ($product_list as $products) {

             $stock_list=Stock::where('product_id',$products->id)->get();

              }

                }else{

                    foreach ($product_list as $products) {

                 $stock_list=Stock::where('product_id',$products->id)->where('franchisee_id',Auth::user()->frans_id)->get();
                 }

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
