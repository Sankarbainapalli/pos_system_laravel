@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Accounts List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Accounts</li>
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
                <h3 class="card-title justify-content-center ">Accounts List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-account">Add Account</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Account Title</th>
                    <th>Account Type</th>
                    <th>Credit Amount</th>
                    <th>Debit Amount</th>
                    <th>Mobile No.</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Online Company Account</td>
                    <td>Savings</td>
                    <td>34566</td>
                    <td>23444</td>
                    <td>8885051616</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('edit')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Online Company Account</td>
                    <td>Savings</td>
                    <td>34566</td>
                    <td>23444</td>
                    <td>8885051616</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Online Company Account</td>
                    <td>Savings</td>
                    <td>34566</td>
                    <td>23444</td>
                    <td>8885051616</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Online Company Account</td>
                    <td>Savings</td>
                    <td>34566</td>
                    <td>23444</td>
                    <td>8885051616</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Online Company Account</td>
                    <td>Savings</td>
                    <td>34566</td>
                    <td>23444</td>
                    <td>8885051616</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Online Company Account</td>
                    <td>Savings</td>
                    <td>34566</td>
                    <td>23444</td>
                    <td>8885051616</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Online Company Account</td>
                    <td>Savings</td>
                    <td>34566</td>
                    <td>23444</td>
                    <td>8885051616</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Online Company Account</td>
                    <td>Savings</td>
                    <td>34566</td>
                    <td>23444</td>
                    <td>8885051616</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <!-- <tr>
                    <th colspan="4">Total</th>
                    <th>54000</th>
                    <th></th>
                  </tr> -->
                  <tr>
                    <th>Account Title</th>
                    <th>Account Type</th>
                    <th>Credit Amount</th>
                    <th>Debit Amount</th>
                    <th>Mobile No.</th>
                    <th>Address</th>
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
    <div class="modal fade" id="add-account">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Account</h4>
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
                        <label>Account Title</label>
                        <input type="text" class="form-control" placeholder="Enter Account Title" id="accntitle" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Account Type</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="accntype">
                            <option selected="selected">Savings</option>
                            <option>Current</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Credit Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Credit Amount" id="credit" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Debit Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Debit Amount" id="debit" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Enter Your Address" id="address" required>
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

@endsection