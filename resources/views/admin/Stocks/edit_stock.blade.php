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
             <form action="{{route('stock.update', $stock->id)}}" method="POST">
                       @csrf
                    @method('patch')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>qty</label>
                    <input type="text" name="qty" class="form-control" placeholder="Enter qty" id="overallstk" required value="{{$stock->qty}}">
                </div>
                
            </div>
          </div>
            <!-- /.row -->
            <button type="submit" class="btn btn-block btn-primary mt-3">Save Changes</button>
            <!-- /.button -->
          </div>
        </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    

@endsection