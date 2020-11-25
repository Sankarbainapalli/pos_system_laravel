@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Incomes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Incomes</li>
              <li class="breadcrumb-item active">Edit Incomes</li>
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
            <h3 class="card-title">Edit Incomes</h3>

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
            <div class="row">
               <form action="{{route('income.update', $income->id)}}" method="POST">
                       @csrf
                    @method('patch')
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                         <label>Source From</label>
                        <input type="text" class="form-control" placeholder="From Which Source" id="source" name="source_from" value="{{$income->source_from}}">
                        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" placeholder="Date" id="dte" name="cur_date" value="{{$income->cur_date}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                       <label>Name Of Candidate</label>
                        <input type="text" class="form-control" placeholder="Enter Candidate's/Business Name" id="business" name="name"  value="{{$income->name}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" name="mobile"  value="{{$income->mobile}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email-Id" id="emailid" name="email"  value="{{$income->email}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Purpose</label>
                        <input type="text" class="form-control" placeholder="Enter Purpose" id="prpse" name="purpose"  value="{{$income->purpose}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Amount" id="amount" name="amount"  value="{{$income->amount}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>In Words</label>
                        <input type="text" class="form-control" placeholder="Enter Amount In Words" id="amountwords" name="in_words"  value="{{$income->in_words}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mode Of Payment</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="payment_mode">
                            <option {{ ( $income->payment_mode=='Bank') ? 'selected' : '' }}>Bank</option>
                            <option value="Cash" {{ ( $income->payment_mode=='Cash') ? 'selected' : '' }}>Cash</option>
                            <option value="Bank Transfer" {{ ( $income->payment_mode=='Bank Transfer') ? 'selected' : '' }}>Bank Transfer</option>
                        </select>
                      </div>
                    </div>
                  </div>
            
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