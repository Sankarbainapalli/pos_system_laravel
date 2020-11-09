<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Franchisee;

class FranchiseeController extends Controller
{
    //

    public function index(){

        return view('admin.franchisees.list');
    }

     public function store(Request $request){

        // dd($request->all());

       Franchisee::create($request->all());

    return redirect()->route('franchisee.index')->with('message','franchisee Has been added Successfully');
    }

     public function edit(Franchisee $franchisee){

        // $category_list=Category::all();
        // $branch_list=Branch::all();
        
        return view('admin.franchisees.edit_franchisee',compact('franchisee','category_list','branch_list'));
    }

     public function update(Request $request,Franchisee $franchisee){


        $franchisee->update($request->all());

        // $franchisee->update(['name'=>$request->name,'status'=>$request->status]);

        return redirect(route('franchisee.index'))->with('message','franchisee Updated Successfully');
    }



    public function destroy(Franchisee $franchisee){

        // Todo::where('id',$id)->delete();

         $franchisee->delete();

         return redirect()->back()->with('error','franchisee Deleted Has been Successfully');

    }

  
}
