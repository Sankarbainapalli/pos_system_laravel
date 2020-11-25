<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CustomerCreateRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    //

    public function index(Customer $customer){

    	$customer_list=Customer::all();

    	// $customer_list=auth()->user()->customers()->get();

        return view('admin.Customers.list',compact('customer_list'));
    }

     public function store(CustomerCreateRequest $request){

  //       $post = new Customer;
		// $post->name = $request->input('name');
		// $post->location = $request->input('location');
		// $post->mobile = $request->input('mobile');
		// $post->save();

		// $this->validate($request,[
  //         'name'=> 'required',
  //         'location'=> 'required',
  //         'mobile'=> 'required|integer|size:10',
  //        ]);

        //  $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'location' => 'required|location|max:255',
        //     'mobile' => 'required|integer|size:10|unique:posts|max:10',
        // ]);

        // $validator= Validator::make($request->all(),$rules,$messages);

        // if($validator->fails()){
        //     return redirect()->back()
        //     ->withErrors($validator)
        //     ->withInput();
        // }

         Customer::create($request->all());

       return redirect()->route('customer.index')->with('message','Customers Has been added Successfully');
    }

    // public function show(Customer $customer){

    // 	 return view('admin.customers.list',compact('customer_list '));
    // }


     public function edit(Customer $customer){
   
         // $todo = Todo::find($id);

        // dd($todo->title);

        return view('admin.Customers.edit_customer',compact('customer'));
    }

    public function update(CustomerCreateRequest $request,Customer $customer){

        $customer->update(['name'=>$request->name,'location'=>$request->location,'mobile'=>$request->mobile]);

        return redirect(route('customer.index'))->with('message','Updated Successfully');
    }

    public function show(Customer $customer){
      
        $customer->delete();

         return redirect()->back()->with('error','Customer Deleted Has been Successfully');

    }


    public function destroy(Customer $customer){

        // Todo::where('id',$id)->delete();
         $customer->delete();

         return redirect()->back()->with('error','Customer Deleted Has been Successfully');

    }


   

}


