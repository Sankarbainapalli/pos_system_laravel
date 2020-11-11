<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Franchisee;
use App\Models\Branch;

class FranchiseeController extends Controller
{
    //

    public function index(){

        $franchisee_list=Franchisee::all();
        $branch_list=Branch::all();

        if(Franchisee::count()=='0'){

            $fran_code='0'; 

            }else{
   
           $fran_code=Franchisee::count();

        }

        return view('admin.franchisees.list',compact('franchisee_list','fran_code','branch_list'));
    }

     public function store(Request $request){

        // dd($request->all());
        
       Franchisee::create($request->all());

       send_sms($request->mobile, "Dear ".$request->name.",\nYour Creadintial Details:\nEmail:".$request->email."\nPassword:".$request->password."\nRegards\nTeam\ASKMEGURU");

    return redirect()->route('franchisee.index')->with('message','franchisee Has been added Successfully');
    }

     public function edit(Franchisee $franchisee){

        // $category_list=Category::ls();
        // $branch_list=Branch::all();
        
        return view('admin.franchisees.edit_franchisee',compact('franchisee'));
    }

     public function update(Request $request,Franchisee $franchisee){


        $franchisee->update($request->all());

        // $franchisee->update(['name'=>$request->name,'status'=>$request->status]);

        return redirect(route('franchisee.index'))->with('message','franchisee Updated Successfully');
    }

     public function show(Franchisee $franchisee){

        // Todo::where('id',$id)->delete();

         $franchisee->delete();

         return redirect()->back()->with('error','franchisee Deleted Has been Successfully');

    }



    public function destroy(Franchisee $franchisee){

        // Todo::where('id',$id)->delete();

         $franchisee->delete();

         return redirect()->back()->with('error','franchisee Deleted Has been Successfully');

    }

  
}
