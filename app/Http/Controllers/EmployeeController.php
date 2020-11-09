<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    //

    public function index(){

    	$employee_list=User::all();
        $role_list=Role::all();

        return view('admin.employees.list',compact('employee_list','role_list'));
    }

    public function store(Request $request){

        // dd($request->all());

       $post = new User;
       $post->name = $request->input('name');
       $post->email = $request->input('email');
       $post->mobile = $request->input('mobile');
       $post->password =  Hash::make($request->input('password'));
       $post->role = $request->input('role');
       $post->status = $request->input('status');
       $post->save();

         return redirect()->back()->with('message','Employee Added Has been Successfully');
    }

    public function edit(User $employee){

        $role_list=Role::all();

        return view('admin.employees.edit_employee',compact('employee','role_list'));
    }

     public function update(Request $request,User $employee){

        $employee->update(['name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'password'=>Hash::make($request->password),'role'=>$request->role,'status'=>$request->status]);

        return redirect(route('employee.index'))->with('message','Updated Successfully');
    }



    public function destory(User $user){

        // Todo::where('id',$id)->delete();
         $user->delete();

         return redirect()->back()->with('error','Employee Deleted Has been Successfully');

    }
}
