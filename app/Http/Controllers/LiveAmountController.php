<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Liveamount;
use App\Models\Category;
use App\Models\Product;
use App\Models\Branch;
use App\Models\Franchisee;
use Auth;
 

class LiveAmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

         if(Auth::user()->role_id == 'SUPERADMIN'){

          $liveamount_list=Liveamount::where('created_at', '>=', date('Y-m-d').' 00:00:00')->get();
          // $liveamount_list=Liveamount::where('created_at', '>=', date('Y-m-d').' 00:00:00')->get()->all();
          
      }else{

         $liveamount_list=Liveamount::where('branch_id',Auth::user()->frans_id)->where('created_at', '>=', date('Y-m-d').' 00:00:00')->get()->all();
         // $liveamount_list=Liveamount::where('branch_id',Auth::user()->frans_id)->get()->all();
      }
          

        $category_list=Category::all();

        $franchisee_list=Franchisee::all();

        $type =  $request->session()->get('product_category');

      $product_list=Product::where('category_id',$type)->get()->all();
      
     return view('admin.LiveAmount.list',compact('liveamount_list','category_list','product_list','type','franchisee_list'));
      // }

        
    }

  //   function getProduct(Request $request){

  //  $request->session()->put('product_category', $request->product_category);

  //   echo 'SUCCESS';
  // }

   function getProduct1(Request $request){

    // return $request->product_category;

    $product_list=Product::where('category_id',$request->product_category)->get()->all();

    echo json_encode($product_list);

    // echo 'SUCCESS';
  }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $liveamount=new Liveamount;
        $liveamount->category_id= $request->input('category_id');
        $liveamount->product_id= $request->input('product_id');
        $liveamount->branch_id= $request->input('branch_id');
        // $liveamount->franchisee_id= Auth::user()->frans_id;
        $liveamount->rate= $request->input('rate');
        $liveamount->ratedate= date('Y-m-d');
        $liveamount->save();

        return redirect()->back()->with('message','LiveAmount Added Has been Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Liveamount $liveamount){

        // Todo::where('id',$id)->delete();
         $liveamount->delete();

         return redirect()->back()->with('error','LiveAmount Deleted Has been Successfully');

    }

    public function edit(Liveamount $liveamount){
        
        return view('admin.LiveAmount.edit',compact('liveamount'));
    }

     public function update(Request $request,Liveamount $liveamount){



        $liveamount->update(['chicken'=>$request->chicken,'motton'=>$request->motton,'fish'=>$request->fish]);

        return redirect(route('liveamount.index'))->with('message','LiveAmount Updated Successfully');
    }

    public function destroy(Liveamount $liveamount){

        // Todo::where('id',$id)->delete();
         $liveamount->delete();

         return redirect()->back()->with('error','LiveAmount Deleted Has been Successfully');

    }

}
