<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {    
        $total_emp=User::count();
        return view('admin.dashboard',compact('total_emp'));
    }

    // public function dashboard()
    // {
    //     $total_emp=User::count();
    //     return view('admin.dashboard',compact('total_emp'));
    // }
}
