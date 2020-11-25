@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Expenses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Expenses</li>
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
                <h3 class="card-title justify-content-center ">Expenses List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-expense">Add Expense</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Franchisee Id</th>
                    <th>Date</th>
                    <th>Name Of Candidate</th>
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
                    @foreach($expenses_list as $expenses)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$expenses->franchise_id}}</td>
                    <td>{{$expenses->cur_date}}</td>
                    <td>{{$expenses->name}}</td>
                    <td>{{$expenses->mobile}}</td>
                    <td>{{$expenses->email}}</td>
                    <td>{{$expenses->purpose}}</td>
                    <td>{{$expenses->amount}}</td>
                    <td>{{$expenses->in_words}}</td>
                    <td>{{$expenses->payment_mode}}</td>
                   
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('expenses.edit',$expenses->payment_mode)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                        <a href="{{route('expenses.destroy',$expenses->payment_mode)}}">  <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button></a>
                      </div>
                    </td>
                  </tr>
                 @endforeach
                  </tbody>
                 <!--  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Franchisee Id</th>
                    <th>Date</th>
                    <th>Name Of Candidate</th>
                    <th>Mobile</th>
                    <th>E-Mail</th>
                    <th>Purpose</th>
                    <th>Amount</th>
                    <th>In Words</th>
                    <th>Mode Of Payment</th>
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
    <div class="modal fade" id="add-expense">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Expense</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{route('expenses.store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Franchisee</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="payment_mode">
                            <option selected="selected" >Select</option>
                            @foreach($franchisee_list as $franchisee)
                            <option value="{{$franchisee->id}}">{{$franchisee->name}}</option>
                              @endforeach
                        </select>

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" placeholder="Date" id="dte" name="cur_date">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Name Of Candidate</label>
                        <input type="text" class="form-control" placeholder="Enter Candidate's/Business Name" id="business" name="name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" name="mobile">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email-Id" id="emailid" name="email">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Purpose</label>
                        <input type="text" class="form-control" placeholder="Enter Purpose" id="prpse" name="purpose">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Amount" id="amount" name="amount">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>In Words</label>
                        <input type="text" class="form-control" placeholder="Enter Amount In Words" id="amountwords" name="in_words">
                      </div>
                    </div>
                  
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mode Of Payment</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="payment_mode">
                            <option selected="selected" value="bank">Bank</option>
                            <option value="Cash">Cash</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                        </select>
                      </div>
                    </div>
                  </div>
            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
              </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->

@endsection