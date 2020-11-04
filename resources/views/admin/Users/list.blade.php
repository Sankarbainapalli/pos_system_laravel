@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
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
                <h3 class="card-title justify-content-center ">Users List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-user">Add User</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>UserName</th>
                    <th>Email Id</th>
                    <th>Name</th>
                    <th>Mobile No.</th>
                    <th>Group</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>shankar123 1</td>
                    <td>abc@gmail.com</td>
                    <td>B.Shankar</td>
                    <td>8885051616</td>
                    <td>Administrator</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user">
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
                    <th>UserName</th>
                    <th>Email Id</th>
                    <th>Name</th>
                    <th>Mobile No.</th>
                    <th>Group</th>
                    <th>Action</th>
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
    <div class="modal fade" id="add-user">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add User</h4>
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
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="Enter User Name" id="Uname">
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
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="abc@gmail.com" id="name">
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
                        <label>Group</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="grp">
                            <option selected="selected">Administrator</option>
                            <option>Administrator</option>
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
    <div class="modal fade" id="edit-user">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit User</h4>
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
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="Enter User Name" id="EUname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email Id</label>
                        <input type="email" class="form-control" placeholder="abc@gmail.com" id="Eemail">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="abc@gmail.com" id="Ename">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="Emobile">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" placeholder="Enter Role" id="Erate">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Group</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="Egrp">
                            <option selected="selected">Administrator</option>
                            <option>Administrator</option>
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