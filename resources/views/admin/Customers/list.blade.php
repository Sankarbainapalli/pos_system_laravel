@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customers List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Customers List</li>
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
                <h3 class="card-title justify-content-center ">Customers List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-customer">Add Customer</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Location</th>
                    <th>Mobile No.</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     @foreach($customer_list as $customer)
                  <tr>

                    <td>{{$customer->name}}</td>
                    <td>{{$customer->location}}</td>
                    <td>{{$customer->mobile}}</td>
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('customer.edit',$customer->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                       <a href="{{route('customer.destroy', $customer->id)}}">  <button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button></a> 

                          
                          
                      </div>
                    </td>
                  </tr>
                  
                 
                  @endforeach
                  </tbody>
                 <!--  <tfoot>
                  <tr>
                    <th>Customer Name</th>
                    <th>Email Id</th>
                    <th>Mobile No.</th>
                    <th>Action</th>
                  </tr>
                  </tfoot> -->
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

    <!-- /.modal add customer-->
    <div class="modal fade" id="add-customer">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Customer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <!-- Alert Flash message -->
              
              

            <form action="{{route('customer.store')}}" method="POST">
              @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Customer Name</label>

                        <input type="text" class="form-control" placeholder="Enter Customer Name" name="name" required="">

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">

                        <label>Location</label>
                        <input type="text" class="form-control" placeholder="Enter Location" name="location" required="">

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." name="mobile" required="">

                      </div>
                    </div>
                  </div>
               
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
             </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->


 
@endsection