@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Employees</li>
              <li class="breadcrumb-item active">Edit Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Employee</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
             <form action="{{route('employee.update', $employee->id)}}" method="POST">
                    @csrf
                    @method('patch')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter User Name" id="uname" required value="{{$employee->name}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" id="email" value="{{$employee->email}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required value="{{$employee->mobile}}">
                </div>

                 
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-control select2bs4"  style="width: 100%;" id="role">
                             @foreach($role_list as $role)

                      <option value="{{$role->id}}" {{ ( $role->id == $employee->role) ? 'selected' : '' }}>{{$role->name}}</option>

                      @endforeach
                        </select>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" style="width: 100%;" id="stat">
                      @if($employee->status=='1')
                        <option value="1" selected="selected">Active</option>
                        <option value="0">Deactive</option>
                        @else

                        <option value="0" selected="selected">Deactive</option>
                        <option value="1">Active</option>
                        @endif
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required value="{{$employee->password}}">
                </div>
                  <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <button type="submit" class="btn btn-block btn-primary mt-3">Save Changes</button>
            <!-- /.button -->
          </div>
        </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    

@endsection