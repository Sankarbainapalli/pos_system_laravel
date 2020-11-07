@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Roles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Roles</li>
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
                <h3 class="card-title justify-content-center ">Roles</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-group">Add Role</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Role Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($role_list as $role)
                  <tr>
                   
                    <td>{{$loop->index+1}}</td>
                    <td>{{$role->name}}</td>
                    <td> 
                      <div class="btn-group">
                      <a href="{{route('role.edit',$role->id)}}"><button type="button" class="btn btn-primary" >
                            <i class="far fa-edit"></i>
                          </button></a>

                        <a href="{{route('role.destroy',$role->id)}}"><button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button>
                          </a>  
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Role Name</th>
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
    <div class="modal fade" id="add-group">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Role</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{route('role.store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Role Name" id="rolename" required>
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