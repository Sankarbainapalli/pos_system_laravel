@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employees List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Employees List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <x-alert />
            <div class="card">
              <div class="card-header">
                <h3 class="card-title justify-content-center ">Employees List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-employee">Add Employee</button>
                <!-- <a href="{{route('register')}}"><button type="button" class="btn btn-success float-right" >Add Employee</button></a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>User Name</th>
                    <th>Email Id</th>
                    <th>Mobile No.</th>
                    <th>Role</th>
                    <th>Franchisee</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($employee_list as $list)
                  <tr>

                    <td>{{$loop->index+1}}</td>
                    <td>{{$list->name}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->mobile}}</td>
                    <td style="font-weight: bold;">{{$list->roles->name}}</td>
                    
                      @if($list->frans_id=='0')
                      <td>
                        --
                      </td>

                      @else
                      <td>{{$list->franchisee->name}}</td>
                      @endif
                      
                    <td>@if($list->status=='1')
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">Deactive</span>
                      @endif</td>
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('employee.edit',$list->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                        <a href="{{route('employee.destroy', $list->id)}}"><button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  @endforeach
           
                  </tbody>
                 <!--  <tfoot>
                  <tr>
                    <th>User Name</th>
                    <th>Email Id</th>
                    <th>Mobile No.</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- /.modal add customer-->
    <div class="modal fade" id="add-employee">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{route('employee.store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter User Name" id="uname" required autocomplete="off">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email Id</label>
                        <input type="email" name="email" class="form-control" placeholder="admin@gmail.com" id="email" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" name="mobile" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required>
                      </div>
                    </div>

                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password." id="password" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Role</label>
                        <select name="role_id" class="form-control select2bs4" style="width: 100%;" id="stat">
                            @foreach($role_list as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Franchisees</label>
                        <select name="frans_id" class="form-control" style="width: 100%;">
                            <option value="0">Select</option>
                            @foreach($franchisee_list as $franchisee)
                          
                            <option value="{{$franchisee->id}}">{{$franchisee->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" style="width: 100%;">
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                        </div>
                    </div>
                  </div>
               
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
           </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->

@endsection