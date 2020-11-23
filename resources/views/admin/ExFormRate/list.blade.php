@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ex-Form Rate</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Ex-Form Rate</li>
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
                <form action="{{route('exformrate.store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" name="type" class="form-control" placeholder="Type" id="name1" required value="chicken" readonly=""> 
                        </div>
                      </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" name="rate" class="form-control" placeholder="Rate" id="name2" required >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="date" name="cur_date" class="form-control"  id="name3" required >
                      </div> 
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <button type="submit" class="btn btn-success w-100">Submit</button>
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
                
                    <th>Product type</th>
                    <th>Ex-Form Rate</th>
                    <th>Cur Date</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($exformrate_list as $exformrate)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$exformrate->type}}</td>
                    <td>{{$exformrate->rate}}</td>
                    <td>{{$exformrate->cur_date}}/-</td>
                    <td>{{$exformrate->created_at}}</td>
               
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('exformrate.edit',$exformrate->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                         <a href="{{route('exformrate.destroy',$exformrate->id)}}"><button type="button" class="btn btn-primary">
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

