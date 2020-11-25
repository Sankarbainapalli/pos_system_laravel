<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Liveamount;
use App\Models\Category;
use App\Models\Product;

class LiveAmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          $liveamount_list=Liveamount::all();

        $category_list=Category::all();

        $type =  $request->session()->get('product_category');

      $product_list=Product::where('category_id',$type)->get()->all();
      
     return view('admin.LiveAmount.list',compact('liveamount_list','category_list','product_list','type'));

        
    }

    function getProduct(Request $request){

   $request->session()->put('product_category', $request->product_category);

    echo 'SUCCESS';
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

        // dd($request->all());

        $liveamount=new Liveamount;
        $liveamount->category_id= $request->input('category_id');
        $liveamount->product_id= $request->input('product_id');
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
