@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">POS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">POS</li>
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

          <div class="col-md-5">
            <div class="card">
              <div class="card-header mt-3">
                <!-- <h3 class="card-title mb-3">Scan Your Barcode</h3> -->
                <input class="form-control" type="text" placeholder="Scan Your Barcode">
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Products</th>
                      <th style="width: 30%;">Quantity</th>
                      <th>Per Item</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Chicken</td>
                      <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control rounded-0" placeholder="1" id="number">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-plus"></i>
                            </button>
                        </div>
                      </td>
                      <td><h4><span class="badge bg-success">₹ 50.00</span></h4></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Mutton</td>
                      <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control rounded-0" placeholder="1" name="prod1" id="prod1">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-plus"></i>
                            </button>
                        </div>
                      </td>
                      <td><h4><span class="badge bg-success">₹ 40.00</span></h4></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Fish</td>
                      <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control rounded-0" placeholder="1" name="prod2" id="prod2">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-plus"></i>
                            </button>
                        </div>
                      </td>
                      <td><h4><span class="badge bg-success">₹ 80.00</span></h4></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Prawns</td>
                      <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control rounded-0" placeholder="1" name="prod3" id="prod3">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-plus"></i>
                            </button>
                        </div>
                      </td>
                      <td><h4><span class="badge bg-success">₹ 30.00</span></h4></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Eggs</td>
                      <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control rounded-0" placeholder="1" name="prod4" id="prod4">
                            <button type="button" class="btn btn-sm btn-secondary">
                              <i class="fas fa-plus"></i>
                            </button>
                        </div>
                      </td>
                      <td><h4><span class="badge bg-success">₹ 70.00</span></h4></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%; border-top: 0px;">Total Items</th>
                        <td style="border-top: 0px;">5</td>
                        <th style="width:50%; border-top: 0px;">Total</th>
                        <td style="border-top: 0px;">₹70.00</td>
                      </tr>
                      <tr>
                        <th style="border-top: 0px;">Discount Amt / %</th>
                        <td style="border-top: 0px;">
                           <input size="50" type="text" name="disct" id="disct" placeholder="₹10.00" class="form-control float-right">
                        </td>
                        <th style="border-top: 0px;">Tax (18.00%)</th>
                        <td style="border-top: 0px;">₹10.00</td>
                      </tr>
                      <tr>
                        <th style="border-top: 1px solid #dee2e6;">Total Payable</th>
                        <td style="border-top: 1px solid #dee2e6;"><b>$250.30</b></td>
                      </tr>
                    </table>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
          <div class="col-md-7">
            <div class="card">
              <div class="card-header mt-3">
                <!-- <h3 class="card-title mb-3">Search Product Name Or Code</h3> -->
                <input class="form-control" type="text" placeholder="Search Product Name Or Code">
                <div class="row mt-3">
                  <div class="col-md-4">
                    <button type="button" class="btn btn-block bg-gradient-info"> All</button>
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-block bg-gradient-info"> Veg</button>
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-block bg-gradient-info"> Non-Veg</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-auto" style="height: 245px">
                <a class="btn btn-app">
                  <span class="badge bg-warning">300kgs</span>
                  <i class="fas fa-image"></i> Chicken
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-warning">300kgs</span>
                  <i class="fas fa-image"></i> Mutton
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-warning">891kgs</span>
                  <i class="fas fa-image"></i> Fish
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-warning">67kgs</span>
                  <i class="fas fa-image"></i> Eggs
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-warning">12kgs</span>
                  <i class="fas fa-image"></i> Prawns
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            

                <div class="card-body row">
                  <div class="col-md-4">
                    <button type="button" class="btn btn-block bg-gradient-danger"> Cancel</button>
                    <button type="button" class="btn btn-block bg-gradient-warning"> Hold</button>
                    <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#modal-default"> Payment</button>
                  </div>
                </div>
              
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Payment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Customer Mobile</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="mobile" placeholder="Customer Mobile">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Total Payable Amount</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="payamt" readonly placeholder="₹100.00">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Total Purchased Items</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="puramt" readonly placeholder="5">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Paid By</label>
                    </div>
                    <div class="col-sm-7">
                      <select class="form-control select2bs4" style="width: 100%;" id="paidby">
                          <option selected="selected">Cash</option>
                          <option>Online Payment</option>
                          <option>Net</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Paid Amount</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="₹200.00" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Return Change</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="inputEmail3" readonly placeholder="₹0.00" >
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@endsection