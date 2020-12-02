<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Stock;
use Auth;

class OrderController extends Controller
{
   
    public function store(Request $request)
    {



       $order=new Order;
       $order->cus_name=$request->cus_name;
       $order->cus_mobile=$request->cus_mobile;
       $order->cus_mobile=$request->cus_mobile;
       $order->total_items=$request->total_items;
       $order->subtotal=$request->subtotal;
       $order->discount=$request->discount;
       $order->tax=$request->tax;
       $order->grandtotal=$request->grandtotal;
       $order->payment_method=$request->payment_method;
       $order->paid_amt=$request->paid_amt;
       $order->return_change=$request->return_change;
       $order->user_id=Auth::user()->id;
       $order->save();

        if(count($request->item_name)>0)
        {
            foreach ($request->item_name as $item=>$v) {

            $data2=array(
                'order_id'=>$order->id,
                'user_id'=>$order->user_id,
                'item_name'=>$request->item_name[$item],
                'qty'=>$request->qty[$item],
                'cur_rate'=>$request->cur_rate[$item],
                'rate_array'=>$request->rate_array[$item]
            );

            Orderitem::Insert($data2);

             $total_stock=Stock::where('franchisee_id',Auth::user()->frans_id)->where('product_id',$request->item_name[$item])->sum('qty');
          
             $update_stock=$total_stock-($request->qty[$item]/1000);

           Stock::where('franchisee_id',Auth::user()->frans_id)->where('product_id', $request->item_name[$item])->update(['qty' => ($update_stock)]);

        }


    }

    return redirect()->route('pos/invoice_print', ['id' => $order->id]);

    // return redirect("/pos/"{$order->id}"/invoice_print");

    // return redirect()->route('invoice_print/')->with('message','Order Has been added Successfully');
    
    }

   
}
