@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">System Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Settings</li>
              <li class="breadcrumb-item active">System Setting</li>
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
            <h3 class="card-title">System Setting</h3>

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
                    <label>Site Name</label>
                    <input type="text" class="form-control" placeholder="Enter Site Name" id="site" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Tax (%)</label>
                    <input type="text" class="form-control" placeholder="Enter Tax" id="tax">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="logo">Upload Logo</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                 <!-- /.form-group -->
                <div class="form-group">
                    <label>Discount</label>
                    <input type="text" class="form-control" placeholder="Discount" id="discount">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group mb-5">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Enter Purpose" id="addrss" required>
                </div>
                <!-- /.form-group -->
                <!-- <div class="form-group">
                    <label>Discount Promo Code (Auto-generated)</label>
                </div> -->
                <!-- /.form-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-success">Generate</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" placeholder="Press Generate To Auto-Generate Promocode" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('public/dist/img/user4-128x128.jpg')}}"
                       alt="User profile picture">
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