<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function employeeList(){

        return view('admin.employees.list');
    }

    public function edit_employee(){

        return view('admin.employees.edit_employee');
    }
}
