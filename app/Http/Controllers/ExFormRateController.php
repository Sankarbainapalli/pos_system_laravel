<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exformrate;

class ExFormRateController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       $exformrate_list=Exformrate::all();
        
     return view('admin.ExFormRate.list',compact('exformrate_list'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

        Exformrate::create($request->all());

       return redirect()->route('exformrate.index')->with('message','EXFormRate Has been added Successfully');
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Exformrate $exformrate){
   
         // $todo = Todo::find($id);

        // dd($todo->title);

        return view('admin.ExFormRate.edit',compact('exformrate'));
    }

    public function update(Request $request,Exformrate $exformrate){

        $exformrate->update(['type'=>$request->type,'rate'=>$request->rate]);

        return redirect(route('exformrate.index'))->with('message','Updated Successfully');
    }

    public function show(Exformrate $exformrate){
      
        $exformrate->delete();

         return redirect()->back()->with('error','exformrate Deleted Has been Successfully');

    }


    public function destroy(Exformrate $exformrate){

        // Todo::where('id',$id)->delete();
         $exformrate->delete();

         return redirect()->back()->with('error','exformrate Deleted Has been Successfully');

    }
}
