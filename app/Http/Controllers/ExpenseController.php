<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Expenses;
use App\Models\Franchisee;
use App\Models\Paymentmethod;


class ExpenseController extends Controller
{
    //

    public function index(){

    	$franchisee_list=Franchisee::all();
    	$expenses_list=Expenses::all();
        $paymentmethod_list=Paymentmethod::where('status','1')->get();

    	return view('admin.Expenses.list',compact('franchisee_list','expenses_list','paymentmethod_list'));
    }

     public function store(Request $request){

         Expenses::create($request->all());

       return redirect()->route('expenses.index')->with('message','Expenses Has been added Successfully');
    }

  

    public function edit(Expenses $expense){

    	$franchisee_list=Franchisee::all();

        return view('admin.Expenses.edit',compact('expense','franchisee_list'));
    }

    public function update(Request $request,Expenses $Expenses){

        return redirect(route('expenses.index'))->with('message','Updated Successfully');
    }


    public function show(Expenses $expense){

        // Todo::where('id',$id)->delete();
         $expense->delete();

         return redirect()->back()->with('error','Expenses Deleted Has been Successfully');

    }



    public function destroy(Expenses $expense){

        // Todo::where('id',$id)->delete();
         $expense->delete();

         return redirect()->back()->with('error','Expenses Deleted Has been Successfully');

    }





}
