@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Branches</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Branches</li>
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
                <h3 class="card-title justify-content-center ">Branches</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-branch">Add Branch</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Branch ID</th>
                    <th>Branch Name</th>
                    <th>Location</th>
                    <!-- <th>Status</th> -->
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     @foreach($branch_list as $branch)
                  <tr>

                    <td>{{$loop->index+1}}</td>
                    <td>BRN00{{$branch->id}}</td>
                    <td>{{$branch->name}}</td>
                    <td>{{$branch->location}}</td>
                    <!-- <td>{{$branch->status}}</td> -->
                    <td> 
                      <div class="btn-group">
                          <a href="productDetails/{{$branch->id}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
  
                      </div>
                    </td>
                  </tr>
                  @endforeach
             
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Branch Name</th>
                    <th>Location</th>
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
    <div class="modal fade" id="add-branch">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Branch</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('branch.store')}}" method="POST">
              @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Branch Name</label>
                        <input type="text" class="form-control" placeholder="Enter Branch Name" id="branchname" name="name" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" placeholder="Enter Location Name" id="locationname" name="location" required>
                      </div>
                    </div>

                   <!--  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2bs4" name="status" style="width: 100%;">
                            <option selected="selected" value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                        </div>
                    </div> -->
                    
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