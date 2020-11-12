@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profit & Loss</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Profit & Loss</li>
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
                <!-- <h3 class="card-title justify-content-center ">Profit & Loss</h3> -->
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Branch Name</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="Branch">
                              <option selected="selected">Branch 1</option>
                              <option>Branch 2</option>
                              <option>Branch 3</option>
                          </select>
                        </div>
                      </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Store Id</label>
                        <input type="text" class="form-control" placeholder="Enter Store Id" id="storeid" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Date range:</label>
                        
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="far fa-calendar-alt"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control float-right" id="reservation" required>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Search</button>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Date</th>
                    <th>Live Stock Qty</th>
                    <th>Live Stock Prc (Today's Prc)</th>
                    <th>Dressed Stock Qty</th>
                    <th>Dressed Stock Prc</th>
                    <th>Sale Price</th>
                    <th>Profit</th>
                    <th>Loss</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>01/01/20</td>
                    <td>3 BOXES * 50kgs</td>
                    <td>50kgs * 91</td>
                    <td>20kgs * 230</td>
                    <td>20 * 230</td>
                    <td>Rs 4600/-</td>
                    <td>Rs 1200</td>
                    <td>Rs 1000</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01/01/20</td>
                    <td>3 BOXES * 50kgs</td>
                    <td>50kgs * 91</td>
                    <td>20kgs * 230</td>
                    <td>20 * 230</td>
                    <td>Rs 4600/-</td>
                    <td>Rs 1200</td>
                    <td>Rs 1000</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01/01/20</td>
                    <td>3 BOXES * 50kgs</td>
                    <td>50kgs * 91</td>
                    <td>20kgs * 230</td>
                    <td>20 * 230</td>
                    <td>Rs 4600/-</td>
                    <td>Rs 1200</td>
                    <td>Rs 1000</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01/01/20</td>
                    <td>3 BOXES * 50kgs</td>
                    <td>50kgs * 91</td>
                    <td>20kgs * 230</td>
                    <td>20 * 230</td>
                    <td>Rs 4600/-</td>
                    <td>Rs 1200</td>
                    <td>Rs 1000</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01/01/20</td>
                    <td>3 BOXES * 50kgs</td>
                    <td>50kgs * 91</td>
                    <td>20kgs * 230</td>
                    <td>20 * 230</td>
                    <td>Rs 4600/-</td>
                    <td>Rs 1200</td>
                    <td>Rs 1000</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Date</th>
                    <th>Live Stock Qty</th>
                    <th>Live Stock Prc (Today's Prc</th>
                    <th>Dressed Stock Qty</th>
                    <th>Dressed Stock Prc</th>
                    <th>Sale Price</th>
                    <th>Profit</th>
                    <th>Loss</th>
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

@endsection