<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Liveamount;

class LiveAmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $liveamount_list=Liveamount::all();
     return view('admin.liveamount.list',compact('liveamount_list'));
        
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
        $liveamount->chicken= $request->input('chicken');
        $liveamount->motton= $request->input('motton');
        $liveamount->fish= $request->input('fish');
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
        
        return view('admin.liveamount.edit',compact('liveamount'));
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
