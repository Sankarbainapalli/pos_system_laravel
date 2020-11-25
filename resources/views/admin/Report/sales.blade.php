@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sales Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Sales Report</li>
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
                <form action="{{route('sales_report')}}" method="Post">
                  @csrf
                  <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Branch</label>
                            <select class="form-control select2bs4" style="width: 100%;" id="Branch">
                                <option selected="selected">All Branches</option>
                                <option>Branch 2</option>
                                <option>Branch 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Paid By</label>
                            <select class="form-control select2bs4" style="width: 100%;" id="Branch">
                                <option selected="selected">All</option>
                                <option>Bank</option>
                                <option>Cash</option>
                                <option>Bank Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>From</label>
                        <input type="datetime-local" class="form-control" name="from_date">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>To</label>
                        <input type="datetime-local" class="form-control" name="to_date" >
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
                    <th>#</th>
                    <th>Date</th>
                    <th>Sale Id</th>
                    <th>Branch Name</th>
                    <th>Payment</th>
                    <th>Sub Total</th>
                    <th>Tax (INR)</th>
                    <th>Grand Total (INR)</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($order_list as $order)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><?php echo date('d-m-Y H:i:sa',strtotime($order->created_at))?></td>
                    <td>CSI{{$order->id}}</td>
                    <td>HYDERABAD</td>
                    <td>{{$order->payment_method}}</td>
                    <td>{{$order->subtotal}}</td>
                    <td>{{$order->tax}}</td>
                    <td>{{$order->grandtotal}}</td>
                  </tr>
                  @endforeach

                  <tr>
                    <th class="border-right-0"><b>TOTAL</b></th>
                    <td class="border-right-0"></td>
                    <td class="border-right-0"></td>
                    <td></td>
                    <td></td>
                    <th>Rs.{{$subtotal}}</th>
                    <th>Rs.{{$tax}}</th>
                    <th>Rs.{{$grandtotal}}</th>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Sale Id</th>
                    <th>Branch Name</th>
                    <th>Payment</th>
                    <th>Sub Total</th>
                    <th>Tax (INR)</th>
                    <th>Grand Total (INR)</th>
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