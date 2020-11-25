@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Incomes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Incomes</li>
              <li class="breadcrumb-item active">Edit Incomes</li>
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
            <h3 class="card-title">Edit Incomes</h3>

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
                    <label>Name Of Candidate</label>
                    <input type="text" class="form-control" placeholder="Enter Candidate's/Business Name" id="business" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" placeholder="Date" id="dte">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Source From</label>
                    <input type="text" class="form-control" placeholder="Enter Source" id="Source" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email-Id" id="emailid" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Purpose</label>
                    <input type="text" class="form-control" placeholder="Enter Purpose" id="prpse" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Enter Amount" id="amount" required>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>In Words</label>
                    <input type="text" class="form-control" placeholder="Enter Amount In Words" id="amountwords" required>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Mode Of Payment</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                        <option selected="selected">Bank</option>
                        <option>Cash</option>
                        <option>Bank Transfer</option>
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