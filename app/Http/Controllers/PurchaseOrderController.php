<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Exformrate;
use App\Models\Franchisee;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use Auth;

class PurchaseOrderController extends Controller
{

    public function index()
    {

         $franchisee_list = Franchisee::all();
        $banch_list = Branch::all();
        $product_rate = Exformrate::where('created_at', '>=', date('Y-m-d') . ' 00:00:00')->sum('rate');

        if(Auth::user()->role_id=="SUPERADMIN"){

        $pur_list = PurchaseOrder::all();

        // $franchisee_list = Franchisee::all();
        // $banch_list = Branch::all();
        // $product_rate = Exformrate::where('created_at', '>=', date('Y-m-d') . ' 00:00:00')->sum('rate');
    }else{

       $pur_list = PurchaseOrder::where('franchisee_id',Auth::user()->frans_id)->get();

  }

        return view('admin.PurchaseOrder.list', compact('franchisee_list', 'product_rate', 'banch_list', 'pur_list'));
    }

    public function getFranchisee(Request $request)
    {

        // $request->session()->put('product_id', $request->franchisee_id);

        // $franchisee_id =  $request->session()->get('franchisee_id');

        $franchisee_id = $request->franchisee_id;

        $product_rate = Franchisee::where('id', $franchisee_id)->get()->all();

        echo json_encode($product_rate);

        // return response()->json(['data' => $product_rate]);

    }

    public function getbranch(Request $request)
    {

        $franchisee_id = $request->branch_id;

        $product_rate = Franchisee::where('city', $franchisee_id)->get()->all();

        echo json_encode($product_rate);

        // return response()->json(['data' => $product_rate]);

    }

    public function store(Request $request)
    {

        // dd($request->all());

        PurchaseOrder::create($request->all());

        return redirect()->route('purchaseorder.index')->with('message', 'Purchase Has been added Successfully');
    }

    public function edit(PurchaseOrder $purchaseorder)
    {

        $franchisee_list = Franchisee::all();
        $banch_list = Branch::all();
        $product_rate = ExFormRate::where('created_at', '>=', date('Y-m-d') . ' 00:00:00')->sum('rate');

        return view('admin.PurchaseOrder.edit', compact('franchisee_list', 'product_rate', 'banch_list', 'purchaseorder'));

    }

    public function update(Request $request, PurchaseOrder $purchaseorder)
    {

        $purchaseorder->update($request->all());

        return redirect(route('purchaseorder.index'))->with('message', 'Updated Successfully');
    }

    public function show(PurchaseOrder $purchaseorder)
    {

        // Todo::where('id',$id)->delete();
        $purchaseorder->delete();

        return redirect()->back()->with('error', 'purchaseorder Deleted Has been Successfully');

    }

    public function destroy(PurchaseOrder $purchaseorder)
    {

        // Todo::where('id',$id)->delete();
        $purchaseorder->delete();

        return redirect()->back()->with('error', 'purchaseorder Deleted Has been Successfully');

    }

}
