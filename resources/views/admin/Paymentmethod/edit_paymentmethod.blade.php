@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Payment Method</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Payment Method</li>
              <li class="breadcrumb-item active">Edit Payment Type</li>
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
            <h3 class="card-title">Edit Payment Method</h3>

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
            <form action="{{route('paymentmethod.update', $paymentmethod->id)}}" method="POST">
                       @csrf
                    @method('patch')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Payment Type Name</label>
                    <input type="text" class="form-control" placeholder="Enter Role Name" id="Rname" name="name" value="{{$paymentmethod->name}}" required>
                </div>
              </div>

               <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Payment Type Name</label>
                        <select class="form-control" name="status">

                            @if($paymentmethod->status=='1')

                             <option value="1">Active</option>
                             <option value="0">Inactive</option>

                             @endif

                             @if($paymentmethod->status=='0')

                             <option value="0" selected="">Inactive</option>
                             <option value="1">Active</option>

                              @endif
                         
                        </select>
                      </div>
                    </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <button type="submit" class="btn btn-block btn-primary mt-3">Save Changes</button>
          </form>
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