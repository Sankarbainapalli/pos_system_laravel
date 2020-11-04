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
                    <th>Branch Name</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Shop 1</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-branch">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shop 1</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-branch">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shop 1</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-branch">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shop 1</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-branch">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Branch Name</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
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
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Branch Name</label>
                        <input type="text" class="form-control" placeholder="Enter Branch Name" id="branchname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" placeholder="Enter Location Name" id="locationname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected">Active</option>
                            <option>Deactive</option>
                        </select>
                        </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Add</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->


    <!-- /.modal edit customer-->
    <div class="modal fade" id="edit-branch">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Group</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Branch Name</label>
                        <input type="text" class="form-control" placeholder="Enter Branch Name" id="ebranchname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" placeholder="Enter Location Name" id="elocationname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected">Active</option>
                            <option>Deactive</option>
                        </select>
                        </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@endsection