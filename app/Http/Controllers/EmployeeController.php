<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;
use App\Models\Franchisee;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    //

   // public function __construct()
   //  {
   //      $this->middleware('auth');
   //  }

    public function index(){

      // dd(Auth::user()->id);

       $role_list=Role::all();


        // $franchisee_list=Franchisee::all();

      if(Auth::user()->role_id=='SUPERADMIN'){

        $franchisee_list=Franchisee::all();
       	$employee_list=User::all();

     }else{
       $franchisee_list=Franchisee::where('id',Auth::user()->frans_id)->get()->all();
      $employee_list=User::where('frans_id',Auth::user()->frans_id)->get()->all();
     }
       

        return view('admin.Employees.list',compact('employee_list','role_list','franchisee_list'));
    }

    public function store(Request $request){



        // dd($request->all());

       $post = new User;
       $post->name = $request->input('name');
       $post->email = $request->input('email');
       $post->mobile = $request->input('mobile');
       $post->password =  Hash::make($request->input('password'));
       $post->role_id = $request->input('role_id');
       $post->frans_id = $request->input('frans_id');
       // $post->user_id = Auth::user()->id;
       // $post->status = $request->input('status');
       $post->save();

         // send_sms('7661910404', "Dear ".$request->name.",\nYour Creadintial Details:\nEmail:".$request->email."\nPassword:".$request->password."\nRegards\nTeam\ASKMEGURU");

         return redirect()->back()->with('message','Employee Added Has been Successfully');
    }

    public function edit(User $employee){

        $role_list=Role::all();

        return view('admin.Employees.edit_employee',compact('employee','role_list'));
    }

     public function update(Request $request,User $employee){

        $employee->update(['name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'password'=>Hash::make($request->password),'role'=>$request->role,'status'=>$request->status]);

        return redirect(route('employee.index'))->with('message','Updated Successfully');
    }




    public function destory(User $employee){

        // Todo::where('id',$id)->delete();
         $user->delete();
         Order::where('user_id',$employee->id)->delete();

         return redirect()->back()->with('error','Employee Deleted Has been Successfully');

    }



    public function show(User $employee){

        // Todo::where('id',$id)->delete();
         $employee->delete();
         Order::where('user_id',$employee->id)->delete();

         return redirect()->back()->with('error','Employee Deleted Has been Successfully');

    }

}
