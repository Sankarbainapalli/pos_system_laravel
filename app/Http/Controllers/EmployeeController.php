<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function employeeList(){

        return view('admin.employees.list');
    }
}
