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

            <div class="card">
              <div class="card-header">
                <h3 class="card-title justify-content-center ">Employees List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-employee">Add Employee</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Employee Name</th>
                    <th>Email Id</th>
                    <th>Mobile No.</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  </tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Shankar</td>
                    <td>abc@gmail.com</td>
                    <td>8885051616</td>
                    <td>Developer</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-employee">
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
                    <th>Employee Name</th>
                    <th>Email Id</th>
                    <th>Mobile No.</th>
                    <th>Role</th>
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
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" placeholder="Enter Employee Name" id="uname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email Id</label>
                        <input type="email" class="form-control" placeholder="abc@gmail.com" id="email">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" placeholder="Enter Role" id="rate">
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
    <div class="modal fade" id="edit-employee">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Stocks List</h4>
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
                        <label>Employee Name</label>
                        <input type="text" class="form-control" placeholder="Enter Employee Name" id="Ename">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email Id</label>
                        <input type="email" class="form-control" placeholder="abc@gmail.com" id="email">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" placeholder="Enter Role" id="rate">
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