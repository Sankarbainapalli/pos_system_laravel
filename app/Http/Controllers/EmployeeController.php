<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeeController extends Controller
{
    //

    public function employeeList(){

    	$employee_list=User::all();

        return view('admin.employees.list',compact('employee_list'));
    }

    public function edit_employee(){

        return view('admin.employees.edit_employee');
    }

    public function destory(User $user){

        // Todo::where('id',$id)->delete();
         $user->delete();

         return redirect()->back()->with('error','Employee Deleted Has been Successfully');

    }
}
