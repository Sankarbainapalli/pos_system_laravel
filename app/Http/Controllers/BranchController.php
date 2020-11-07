<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Branch;

class BranchController extends Controller
{
    //

    public function branchList(){

    	$branch_list=Branch::all();

        return view('admin.Branches.list',compact('branch_list'));
    }

      public function store(Request $request){

    	// dd($request->all());

         Branch::create($request->all());

       return redirect()->route('branchList')->with('message','branch Has been added Successfully');
    }

  

    public function edit(Branch $branch){

        return view('admin.Branches.edit_branch',compact('branch'));
    }

    public function update(Request $request,Branch $branch){

    	 // dd($request->all());

        $branch->update($request->all());

        return redirect(route('branchList'))->with('message','Updated Successfully');
    }


    public function destroy(Branch $branch){

        // Todo::where('id',$id)->delete();
         $branch->delete();

         return redirect()->back()->with('error','branch Deleted Has been Successfully');

    }


    // public function edit_branch(){

    //     return view('admin.branches.edit_branch');
    // }
}
