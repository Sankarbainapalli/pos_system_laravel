@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lived Stocks Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Lived Stocks Report </li>
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

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Franchisee ID</th>
                    <th>Name</th>
                    <th>Total Qty(Kg)</th>
                    <th>Ex-Form Rate</th>
                    <th>Total Amount</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($stock_list as $stock)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>FRD00{{$stock->franchisee_id}}</td>
                    <td>{{$stock->Product->product_name}}</td>
                    <td>{{$stock->qty}}</td>
                    <td>
                      {{$stock->rate}}
                    </td>
                    <td>{{$stock->amount}}</td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime($stock->created_at));?></td>
                    
                    
                  </tr>
                 
                  @endforeach
            
                  </tbody>
                  <tfoot>
                  <tr>
                    <th colspan="3">Total Qty</th>
                    <th>{{$total_lived_stock1}}</th>
                   <!--  <th></th>
                    <th>{{$total_lived_stock_amt}}</th> -->
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
    <!-- <div class="modal fade" id="add-stock">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Stock</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>OverAll Stocks</label>
                        <input type="text" class="form-control" placeholder="Enter OverAll Stocks" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Live Stocks</label>
                        <input type="text" class="form-control" placeholder="Enter Live Stocks" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Dressed Stocks</label>
                        <input type="text" class="form-control" placeholder="Enter Dressed Stocks" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" placeholder="Enter Rate" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Amount" required>
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
        </div>
      </div> -->
      <!-- /.modal add customer-->

@endsection
