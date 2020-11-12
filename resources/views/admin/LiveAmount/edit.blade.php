@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Live Amount</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Update Live amount</a></li>
              <li class="breadcrumb-item active">Live Amount</li>
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
            <x-alert />
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title justify-content-center ">Live Amount (Main Shop)</h3> -->
                <form action="{{route('liveamount.update', $liveamount->id)}}" method="POST">
                       @csrf
                    @method('patch')
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" name="chicken" class="form-control" placeholder="Chicken Rate" id="name1" required value="{{$liveamount->chicken}}"> 
                        </div>
                      </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" name="motton" class="form-control" placeholder="Motton Rate" id="name2" required value="{{$liveamount->motton}}">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" name="fish" class="form-control" placeholder="Fish Rate" id="name3" required value="{{$liveamount->fish}}">
                      </div> 
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <button type="submit" class="btn btn-success w-100">Update</button>
                      </div> 
                    </div>
                  </div>
                </form>
              </div>
             
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

@endsection