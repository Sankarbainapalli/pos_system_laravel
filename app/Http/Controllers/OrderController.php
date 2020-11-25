<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderitem;

class OrderController extends Controller
{
   
    public function store(Request $request)
    {

        // dd($request->all());


       $order=Order::create($request->all());

        if(count($request->item_name)>0)
        {
            foreach ($request->item_name as $item=>$v) {

            $data2=array(
                'order_id'=>$order->id,
                'item_name'=>$request->item_name[$item],
                'qty'=>$request->qty[$item],
                'rate_array'=>$request->rate_array[$item]
            );

            Orderitem::Insert($data2);
        }
    }

    return redirect()->route('pos/invoice_print', ['id' => $order->id]);

    // return redirect("/pos/"{$order->id}"/invoice_print");

    // return redirect()->route('invoice_print/')->with('message','Order Has been added Successfully');
    
    }

   
}
