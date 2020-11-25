<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Income;
use App\Models\Franchisee;

class IncomeController extends Controller
{
    public function index(){

    	$income_list=Income::all();


    	return view('admin.Incomes.list',compact('income_list'));
    }

      public function store(Request $request){

         Income::create($request->all());

       return redirect()->route('income.index')->with('message','Income Has been added Successfully');
    }

    public function edit(Income $income){


    	$franchisee_list=Franchisee::all();

        return view('admin.Incomes.edit',compact('income','franchisee_list'));
    }

    public function update(Request $request,Income $income){

        return redirect(route('income.index'))->with('message','Updated Successfully');
    }


    public function show(Income $income){

        // Todo::where('id',$id)->delete();
         $income->delete();

         return redirect()->back()->with('error','Income Deleted Has been Successfully');

    }



    public function destroy(Income $income){

        // Todo::where('id',$id)->delete();
         $income->delete();

         return redirect()->back()->with('error','Income Deleted Has been Successfully');

    }


}
