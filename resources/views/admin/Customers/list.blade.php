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
                          <a href="{{route('edit_customer')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
<<<<<<< HEAD
                          </button>
                       <a href="{{route('customer.destroy', $customer->id)}}">  <button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button></a> 
=======
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_customer')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_customer')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_customer')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_customer')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_customer')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_customer')}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
>>>>>>> vishal
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Customer Name</th>
                    <th>Email Id</th>
                    <th>Mobile No.</th>
                    <th>Action</th>
                  </tr>
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
<<<<<<< HEAD
                        <input type="text" class="form-control" placeholder="Enter Customer Name" name="name">
=======
                        <input type="text" class="form-control" placeholder="Enter Customer Name" required>
>>>>>>> vishal
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">

                        <label>Location</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" placeholder="Enter Location" name="location">

=======
                        <input type="text" class="form-control" placeholder="Enter Location">
>>>>>>> vishal
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
<<<<<<< HEAD
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." name="mobile">
=======
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." required>
>>>>>>> vishal
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

<<<<<<< HEAD

    <!-- /.modal edit customer-->
    <div class="modal fade" id="edit-customer">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Customer List</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="{{route('customer.update', $customer->id)}}" method="POST">
               @csrf
        @method('patch')
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" placeholder="Enter Customer Name" name="name" value="{{$customer->name}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" placeholder="Enter Location " name="location" value="{{$customer->location}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." name="mobile" value="{{$customer->mobile}}">
                      </div>
                    </div>
                  </div>
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

=======
>>>>>>> vishal
@endsection