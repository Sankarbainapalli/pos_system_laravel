<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/dist/css/adminlte.min.css')}}">
  
  <style type="text/css">
    .f-14 {
      font-size: 14px;
    }
    .f-15 {
      font-size: 15px;
    }
  </style>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <div class="container">
      <div class="col-6 ml-auto mr-auto">
        <!-- title row -->
         @foreach($order_r as $orders)
        <div class="row">
          <div class="col-12">
            <div class="text-center mb-3">
              <img src="logo.png" class="img-fluid" width="100" height="100">
            </div>
            <div class="mb-3 border-bottom">
              <h4>
                My Chicken Shop
              </h4>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-8 invoice-col">
            <address>
              <strong class="f-14">Address</strong><br>
              <span class="f-14">At - 4th Floor, Plot No. 802 & 803, Ayyappa Central, <br>
              Ayyappa Society, Madhapur, Hyderabad - 500081, India<br>
              Telephone: 8885051616<br>
              Customer Name : {{$orders->cus_name}}<br>
              Mobile : {{$orders->cus_mobile}}</span>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <table>
               <tr>
                <th>Date</th>
                <th>:</th>
                <th><?php echo date('d-m-Y');?></th>
               </tr>
                <tr>
               <th>Time</th>
                <th>:</th>
                <th><?php echo date('H:i:sa');?></th>
              </tr>
               <tr>
               <th>Sale Id</th>
                <th>:</th>
                <th>CSI{{$orders->id}}</th>
              </tr>


             
            </table>
           <!--  <h4>
              <small class="float-right f-15">Date: <?php echo date('d-m-Y');?></small>
              <small class="float-right f-15">Time:  <?php echo date('H:i:sa');?></small>
              <small class="float-right f-15 bold">Sale Id: CSI{{$orders->id}}</small>
            </h4> -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table ">
              <thead>
              <tr>
                <th>#</th>
                <th>Products</th>
                <th>Quantity</th>
                <th>Price / Kgs</th>
                <th>Total</th>
              </tr>
              </thead>
              <tbody>
              @foreach($order_list as $order)
              <tr class="bg-light">
                <td>{{$loop->index+1}}</td>
                <td>{{$order->item_name}}</td>
                <td>{{$order->qty}} Kgs</td>
                <td>Rs.{{$order->rate_array}}</td>
                <td>Rs.{{$order->qty*$order->rate_array}}</td>
              </tr> 
              @endforeach 
             

            <!--   <tr>
                <td><strong>Total Items</strong></td>
                <td class="border-right">{{$orders->total_items}}</td>
                <td>Total</td>
                <td></td>
                <td>Rs.{{$orders->total_items}}</td>
              </tr> -->

              <tr>
                <td class="border-right" colspan="2"></td>
                <td colspan="2">Sub Total</td>
                <td>Rs.{{$orders->subtotal}}</td>
              </tr>
              <tr>
                <td class="border-right" colspan="2"></td>
                <td colspan="2">Tax</td>
                <td>Rs.{{$orders->tax}}</td>
              </tr>

              <tr>
                <td colspan="2"><strong>Grand Total</strong></td>
                <td></td>
                <td></td>
                <td><strong>Rs.{{$orders->grandtotal}}</strong></td>
              </tr>
              <tr>
                <td colspan="2"><strong>Paid Amount</strong></td>
                <td></td>
                <td></td>
                <td><strong>Rs.{{$orders->paid_amt}}</strong></td>
              </tr>
              <tr>
                <td colspan="2"><strong>Return Change</strong></td>
                <td></td>
                <td></td>
                <td><strong>Rs.{{$orders->return_change}}</strong></td>
              </tr>
              <tr>
                <td colspan="2"><strong>Paid By:</strong></td>
                <td></td>
                <td></td>
                <td class="text-success"><strong>{{$orders->payment_method}}</strong></td>
              </tr>
              @endforeach 
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="ml-auto col-12">
            <p class="lead text-center">Chicken Shop</p>
          </div>
        </div>
        <!-- /.row -->

        <div class="row no-print text-center">
          <div class="col-12">
            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
