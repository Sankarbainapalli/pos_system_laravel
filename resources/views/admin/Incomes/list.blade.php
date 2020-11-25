@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Incomes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Incomes</li>
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
                <h3 class="card-title justify-content-center ">Incomes List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-income">Add Income</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name Of Candidate</th>
                    <th>Date</th>
                    <th>Source From</th>
                    <th>Mobile</th>
                    <th>E-Mail</th>
                    <th>Purpose</th>
                    <th>Amount</th>
                    <th>In Words</th>
                    <th>Mode Of Payment</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>01</td>
                    <td>Vishal</td>
                    <td>05/11/12</td>
                    <td>Naveen</td>
                    <td>123456789</td>
                    <td>info@this.com</td>
                    <td>To Sell</td>
                    <td>Rs. 500/-</td>
                    <td>Five Hundred Only</td>
                    <td>Cash</td>
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('incomes.edit',1)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Vishal</td>
                    <td>05/11/12</td>
                    <td>Naveen</td>
                    <td>123456789</td>
                    <td>info@this.com</td>
                    <td>To Sell</td>
                    <td>Rs. 500/-</td>
                    <td>Five Hundred Only</td>
                    <td>Cash</td>
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('incomes.edit',1)}}"><button type="button" class="btn btn-primary">
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
                    <th>#</th>
                    <th>Name Of Candidate</th>
                    <th>Date</th>
                    <th>Source From</th>
                    <th>Mobile</th>
                    <th>E-Mail</th>
                    <th>Purpose</th>
                    <th>Amount</th>
                    <th>In Words</th>
                    <th>Mode Of Payment</th>
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
    <div class="modal fade" id="add-income">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Income</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Name Of Candidate</label>
                        <input type="text" class="form-control" placeholder="Enter Candidate's/Business Name" id="business" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" placeholder="Date" id="dte">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Source From</label>
                        <input type="text" class="form-control" placeholder="From Which Source" id="source" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email-Id" id="emailid" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Purpose</label>
                        <input type="text" class="form-control" placeholder="Enter Purpose" id="prpse" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Amount" id="amount" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>In Words</label>
                        <input type="text" class="form-control" placeholder="Enter Amount In Words" id="amountwords" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mode Of Payment</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected">Bank</option>
                            <option>Cash</option>
                            <option>Bank Transfer</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Add</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->

@endsection