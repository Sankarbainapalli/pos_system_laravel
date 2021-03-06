@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <x-alert />
        <div class="row">

          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title justify-content-center ">Categories List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-category">Add Category</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($category_list as $category)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                      @if($category->status=='1')
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">Deactive</span>
                      @endif
                    </td>
                    <td> 
                      <div class="btn-group">

                          <a href="{{route('category.edit',$category->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>

                          <a href="{{route('category.destroy', $category->id)}}"> <button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button></a>
                         
                      </div>
                    </td>
                  </tr>

                  @endforeach
                 
        
                  </tbody>
                 <!--  <tfoot>
                  <tr>
                     <th>S.No</th>
                    <th>Category Name</th>
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
    <div class="modal fade" id="add-category">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category.store')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" placeholder="Enter Category Name" id="categoryname" name="name" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Status</label>

                        <select name="status" class="form-control" required="">

                          <option>Select Status</option>
                          <option value="1">Active</option>
                          <option value="0">Disable</option>

                        </select>
                      </div>
                    </div>
                  </div>
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->

@endsection