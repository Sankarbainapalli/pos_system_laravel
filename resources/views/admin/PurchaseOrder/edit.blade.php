@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Account</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Accounts</li>
              <li class="breadcrumb-item active">Edit Account</li>
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
            <h3 class="card-title">Edit Account</h3>

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
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Account Title</label>
                    <input type="text" class="form-control" placeholder="Enter Account Title" id="accntitle" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Account Type</label>
                    <select class="form-control select2bs4" style="width: 100%;" id="accntype">
                        <option selected="selected">Savings</option>
                        <option>Current</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Credit Amount</label>
                    <input type="text" class="form-control" placeholder="Enter Credit Amount" id="credit" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Debit Amount</label>
                    <input type="text" class="form-control" placeholder="Enter Debit Amount" id="debit" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Enter Your Address" id="address" required>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2bs4" style="width: 100%;" id="stat">
                        <option selected="selected">Active</option>
                        <option>Deactive</option>
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <button type="button" class="btn btn-block btn-primary mt-3">Save Changes</button>
            <!-- /.button -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    

@endsection