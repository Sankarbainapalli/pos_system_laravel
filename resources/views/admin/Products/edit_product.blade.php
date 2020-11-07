@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Products</li>
              <li class="breadcrumb-item active">Edit Product</li>
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
            <h3 class="card-title">Edit Product</h3>

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
                    <label>Category</label>
                    <select class="select2" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;" >
                        <option>Live</option>
                        <option>Dressed</option>
                        <option>Boneless</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="prod">Product Name</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" id="Prod" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Qty(Kgs)</label>
                    <input type="text" class="form-control" placeholder="Enter Qty" id="qty" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter Price" id="price" required>
                   </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Branch</label>
                    <select class="select2" multiple="multiple" data-placeholder="Select a Branch" style="width: 100%;" id="branch">
                        <option>Madhapur</option>
                        <option>Secunderabad</option>
                        <option>Karim Nagar</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select class="select2" multiple="multiple" data-placeholder="Put Status" style="width: 100%;" id="prod">
                        <option>Active</option>
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