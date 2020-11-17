<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Franchisee;
use App\Models\ExFormRate;
use App\Models\Branch;

class PurchaseOrderController extends Controller
{

     public function index(){

     	$franchisee_list=Franchisee::all();
     	$banch_list=Branch::all();
     	 $product_rate=ExFormRate::where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('rate');

        return view('admin.purchaseorder.list',compact('franchisee_list','product_rate','banch_list'));
    }

       function getFranchisee(Request $request){

     $request->session()->put('product_id', $request->franchisee_id);

     $franchisee_id =  $request->session()->get('franchisee_id');

     $product_rate=Franchisee::where('id','1')->get()->all();

    echo json_encode($product_rate);

    // return response()->json(['data' => $product_rate]);

  }

   function getbranch(Request $request){

       	$franchisee_id=$request->branch_id;

     $product_rate=Franchisee::where('city','1')->get()->all();

    echo json_encode($product_rate);

    // return response()->json(['data' => $product_rate]);

  }



    public function store(Request $request){

    	// dd($request->all());

         PurchaseOrder::create($request->all());

       return redirect()->route('purchase.index')->with('message','Purchase Has been added Successfully');
    }

  

    public function edit(Role $role){

        return view('admin.roles.edit_role',compact('role'));
    }

    public function update(Request $request,Role $role){

        $role->update(['name'=>$request->name]);

        return redirect(route('role.index'))->with('message','Updated Successfully');
    }


    public function show(Role $role){

        // Todo::where('id',$id)->delete();
         $role->delete();

         return redirect()->back()->with('error','Role Deleted Has been Successfully');

    }



    public function destroy(Role $role){

        // Todo::where('id',$id)->delete();
         $role->delete();

         return redirect()->back()->with('error','Role Deleted Has been Successfully');

    }
}
