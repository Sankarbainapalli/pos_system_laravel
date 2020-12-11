<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paymentmethod;

class PaymentMethodController extends Controller
{
    //

     public function index(){

    	$paymentmethod_list=Paymentmethod::all();

        return view('admin.Paymentmethod.list',compact('paymentmethod_list'));
    }

    public function store(Request $request){

    	// dd($request->all());

         Paymentmethod::create($request->all());

       return redirect()->route('paymentmethod.index')->with('message','Paymentmethod Has been added Successfully');
    }


    public function edit(Paymentmethod $paymentmethod){

    	$paymentmethod_list=Paymentmethod::all();

        return view('admin.Paymentmethod.edit_paymentmethod',compact('paymentmethod','paymentmethod_list'));
    }

    public function update(Request $request,Paymentmethod $paymentmethod){

        $paymentmethod->update(['name'=>$request->name,'status'=>$request->status]);

        return redirect(route('paymentmethod.index'))->with('message','Updated Successfully');
    }


    public function show(Paymentmethod $paymentmethod){

        // Todo::where('id',$id)->delete();
         $paymentmethod->delete();

         return redirect()->back()->with('error','Paymentmethod Deleted Has been Successfully');

    }


    public function destroy(Paymentmethod $paymentmethod){

        // Todo::where('id',$id)->delete();
         $paymentmethod->delete();

         return redirect()->back()->with('error','Paymentmethod Deleted Has been Successfully');

    }


}
