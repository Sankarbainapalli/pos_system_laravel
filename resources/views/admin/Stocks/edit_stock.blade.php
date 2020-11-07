@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Stock</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Stocks</li>
              <li class="breadcrumb-item active">Edit Stock</li>
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
            <h3 class="card-title">Edit Stock</h3>

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
                    <label>OverAll Stocks</label>
                    <input type="text" class="form-control" placeholder="Enter OverAll Stocks" id="overallstk" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Dressed Stocks</label>
                    <input type="text" maxlength="10" class="form-control" placeholder="Enter Dressed Stocks" id="dres_stock" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Enter Amount" id="amnt" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Live Stocks</label>
                    <input type="text" class="form-control" placeholder="Enter Live Stocks" id="liv-stk" required>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Rate</label>  <!-- We have to auto-generate IDs -->
                    <input type="text" class="form-control" placeholder="Enter Rate" id="rate" required>
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