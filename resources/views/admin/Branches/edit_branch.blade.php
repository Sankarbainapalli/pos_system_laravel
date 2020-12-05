@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Branch</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Branches</li>
              <li class="breadcrumb-item active">Edit Branch</li>
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
            <h3 class="card-title">Edit Branch</h3>

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
             <form action="{{route('branch.update', $branch->id)}}" method="POST">
                       @csrf
                    @method('patch')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Branch Name</label>
                    <input type="text" class="form-control" placeholder="Enter Branch Name" id="ebranchname" name="name" value="{{$branch->name}}" required>
                </div>
               </div>
                <!-- /.form-group -->
                 <div class="col-md-6">
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" placeholder="Enter Location Name" id="elocationname" name="location" value="{{$branch->location}}" required>
                </div>
              </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
             <!--  <div class="col-md-6">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control select2bs4" style="width: 100%;">
                        @if($branch->status=='1')
                        <option selected="selected" value="1">Active</option>
                        <option value="0">Deactive</option>
                        @else
                        <option value="1">Active</option>
                        <option selected="selected" value="0">Deactive</option>
                        @endif

                    </select>
                </div>
              </div> -->
              <!-- /.col -->
              <button type="submit" class="btn btn-block btn-primary mt-3">Save Changes</button>
            </div>
            <!-- /.row -->
            
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