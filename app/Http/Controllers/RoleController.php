<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
    //

    public function index(){

    	$role_list=Role::all();

        return view('admin.Roles.list',compact('role_list'));
    }

    public function store(Request $request){

    	// dd($request->all());

         Role::create($request->all());

       return redirect()->route('role.index')->with('message','Role Has been added Successfully');
    }

  

    public function edit(Role $role){

        return view('admin.Roles.edit_role',compact('role'));
    }

    public function update(Request $request,Role $role){

        $role->update(['name'=>$request->name]);

        return redirect(route('role.index'))->with('message','Updated Successfully');
    }


    public function show(Role $role){

        // Todo::where('id',$id)->delete();
         $role->delete();

         return redirect()->back()->with('error','Role Deleted Has been Successfully');

    }



    public function destroy(Role $role){

        // Todo::where('id',$id)->delete();
         $role->delete();

         return redirect()->back()->with('error','Role Deleted Has been Successfully');

    }


   
}
