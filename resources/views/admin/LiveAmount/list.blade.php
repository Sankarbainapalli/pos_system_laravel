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

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title justify-content-center ">Live Amount (Main Shop)</h3> -->
                <form>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Product Name" id="name1" required> 
                        </div>
                      </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Product Name" id="name2" required>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Product Name" id="name3" required>
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
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Chicken</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Mutton</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Fish</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-info mt-2">Date</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-secondary mt-2">Action</span><h4></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>₹ 250/-</td>
                    <td>₹ 720/-</td>
                    <td>₹ 420/-</td>
                    <td>01/01/20</td>
                    <td> 
                      <div class="btn-group">
                          <a href="#"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>₹ 250/-</td>
                    <td>₹ 720/-</td>
                    <td>₹ 420/-</td>
                    <td>03/01/20</td>
                    <td> 
                      <div class="btn-group">
                          <a href="#"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>₹ 250/-</td>
                    <td>₹ 720/-</td>
                    <td>₹ 420/-</td>
                    <td>05/01/20</td>
                    <td> 
                      <div class="btn-group">
                         <a href="#"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>₹ 250/-</td>
                    <td>₹ 720/-</td>
                    <td>₹ 420/-</td>
                    <td>05/01/20</td>
                    <td> 
                      <div class="btn-group">
                         <a href="#"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>₹ 250/-</td>
                    <td>₹ 720/-</td>
                    <td>₹ 420/-</td>
                    <td>07/01/20</td>
                    <td> 
                      <div class="btn-group">
                          <a href="#"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Chicken</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Mutton</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-danger mt-2">Fish</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-info mt-2">Date</span><h4></th>
                    <th><h4><span class="badge badge-pill badge-secondary mt-2">Action</span><h4></th>
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

@endsection