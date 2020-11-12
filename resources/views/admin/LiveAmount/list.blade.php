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
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
                <form action="{{route('liveamount.store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" name="chicken" class="form-control" placeholder="Chicken Rate" id="name1" required> 
                        </div>
                      </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" name="motton" class="form-control" placeholder="Motton Rate" id="name2" required>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" name="fish" class="form-control" placeholder="Fish Rate" id="name3" required>
                      </div> 
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <button type="submit" class="btn btn-success w-100">Add</button>
                      </div> 
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Chicken</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Mutton</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Fish</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-info mt-2">Date</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-secondary mt-2">Action</span><h4></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($liveamount_list as $liveamount)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$liveamount->chicken}}/-</td>
                    <td>{{$liveamount->motton}}/-</td>
                    <td>{{$liveamount->fish}}/-</td>
                    <td>{{$liveamount->ratedate}}/-</td>
               
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('liveamount.edit',$liveamount->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                         <a href="{{route('liveamount.destroy',$liveamount->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
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

@endsection