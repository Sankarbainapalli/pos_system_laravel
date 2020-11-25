@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Expenses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Expenses</li>
              <li class="breadcrumb-item active">Edit Expenses</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Expenses</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
             <form action="{{route('expenses.update', $expense->id)}}" method="POST">
                       @csrf
                    @method('patch')
            <div class="row">
              <x-alert />

              <div class="col-md-6">
              <label>Franchisee</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="payment_mode">
                            <option selected="selected" >Select</option>
                            @foreach($franchisee_list as $franchisee)
                            <option value="{{$franchisee->id}}" {{ ( $franchisee->id == $expense->franchisee_id) ? 'selected' : '' }}>{{$franchisee->name}}</option>
                               @endforeach
                </select>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" placeholder="Date" id="dte" value="{{$expense->cur_date}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Name Of Candidate</label>
                    <input type="text" class="form-control" placeholder="Enter Candidate's/Business Name" id="business" name="name"  value="{{$expense->name}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required value="{{$expense->mobile}}" name="mobile">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email-Id" id="emailid" required value="{{$expense->email}}" name="email">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Purpose</label>
                    <input type="text" class="form-control" placeholder="Enter Purpose" id="prpse" required value="{{$expense->purpose}}" name="purpose"> 
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Enter Amount" id="amount" required value="{{$expense->amount}}" name="amount">
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>In Words</label>
                    <input type="text" class="form-control" placeholder="Enter Amount In Words" id="amountwords" required value="{{$expense->in_words}}" name="in_words">
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Mode Of Payment</label>
                    <select class="form-control select2bs4" name="payment_mode" style="width: 100%;">
                       <option {{ ( $expense->payment_mode=='Bank') ? 'selected' : '' }}>Bank</option>
                            <option value="Cash" {{ ( $expense->payment_mode=='Cash') ? 'selected' : '' }}>Cash</option>
                            <option value="Bank Transfer" {{ ( $expense->payment_mode=='Bank Transfer') ? 'selected' : '' }}>Bank Transfer</option>
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <button type="submit" class="btn btn-block btn-primary mt-3">Save Changes</button>
            <!-- /.button -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </form>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    

@endsection