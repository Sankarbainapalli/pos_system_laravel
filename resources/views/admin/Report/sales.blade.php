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
                            <label>Franchisee</label>
                            <select name="user_id" class="form-control select2bs4" style="width: 100%;" id="Branch">
                             <option value="0">Select</option>
                              @foreach($franchisee_list as $franchisee)
                                @if($franchisee->frans_id=='0')
                                  <option value="{{$franchisee->frans_id}}" style="display: none;">ADMIN</option>
                                @else

                              <option value="{{$franchisee->id}}">{{$franchisee->franchisee->name}}</option>
                              @endif
                             @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Paid By</label>
                            <select name="payment_method" class="form-control select2bs4" style="width: 100%;" id="Branch">
                                <option value="">Select</option>
                                @foreach($paymentmethod_list as $payment)
                                <option value="{{$payment->name}}">{{$payment->name}}</option>
                                @endforeach
                               <!--  <option value="CASH">Cash</option>
                                <option value="NETT">Nett</option>
                                <option value="VISA">VISA</option>
                                <option value="CHEQUE">Cheque</option>
                                <option value="DEBIT">Debit</option>
                                <option value="CREDIT">Credit</option>
                                <option value="ONLINEPAYMENT">ONLINE PAYMENT</option> -->
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
                    <th>Franchisee</th>
                    <th>Payment</th>
                    <th>Sub Total</th>
                    <th>Tax </th>
                    <th>Grand Total</th>
                    <th>Print</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($order_list as $order)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><?php echo date('d-m-Y H:i:sa',strtotime($order->created_at))?></td>
                    <td>CSI00{{$order->id}}</td>
                    @if($order->frans_id=='0')
                      <td>Admin Ordered</td>
                    @else
                    <td>{{$order->franchisee->name}}</td>
                    @endif
                    
                    <td>{{$order->payment_method}}</td>
                    <td>{{$order->subtotal}}</td>
                    <td>{{$order->tax}}</td>
                    <td>{{$order->grandtotal}}</td>
                    <td><a href="productDetails/{{$order->id}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-file"></i>
                          </button></a></td>
                  </tr>
                  @endforeach

                  <tr>
                    <th class="border-right-0"><b>TOTAL</b></th>
                    <td class="border-right-0"></td>
                    <td class="border-right-0"></td>
                    <td class="border-right-0"></td>
                    <td></td>
                    <th >Rs.{{$subtotal}}</th>
                    <th>Rs.{{$tax}}</th>
                    <th>Rs.{{$grandtotal}}</th>
                    <th></th>
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
                    <th></th>
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

@section('script')

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );


</script>

@endsection