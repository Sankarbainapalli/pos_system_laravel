<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice | Riyu's Fresh</title>

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

  @page {
  size: 6.2in 8.8in;
  margin-top: -18cm;
  margin-left: 0;
  margin-right: 0;
  }
   
  @media print { 

   
  body {
    width: 450mm;
    height: 300mm;
    /*margin-left: -50px; */
    font-size: 20px !important;
    text-transform: uppercase;
  }

  .sizeimage {
    width: 7.5cm;
    height: 6.0cm;
    margin-bottom: 1cm;
  }

  .sidedate {
    margin-left: 8cm;
    margin-top: 0.5cm;
    /*font-size: 22px;*/
    width: 5cm;
    /*font-weight: bold;*/
  }

  .btn {
    display: none;
  }

  /*.table td .table th {
    padding: 8px 6px;
  }*/

  .sizeprint {
    font-size: 27px;
    color: #000;
    /*padding-left: 0cm;*/
  }

  .size2print {
    font-size: 27px;
    color: #000;
  }

  .sizetitle {
    font-size: 35px;
    color: #000;
  }

  .sizeaddress {
    font-size: 25px;
    color: #000;
  }

  .widthaddress {
    width: 15cm;
    margin-top: 0.5cm;
  }

  .sizewidth {
    width: 15px;
  }

}

  </style>

</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <div class="container">
      <div class="col-6 mr-auto">
        <!-- title row -->
         @foreach($order_r as $orders)
        <div class="row">
          <div class="col-12">
            <div class="text-center mb-3">
              <img src="{{asset('public/img/chicken.png')}}" class="img-fluid sizeimage" width="150" height="120">
            </div>
            <div class="mb-3 border-bottom">
              <h4 class="sizetitle">
                Riyu's Fresh Chicken
              </h4>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-9 invoice-col">
            <address class="widthaddress">
              <strong class="f-14 size2print">Address</strong><br>


              <span class="f-14 sizeaddress">At - 4th Floor, Plot No. 802 & 803, Ayyappa Central, <br>
              Ayyappa Society, Madhapur, Hyderabad - 500081, India<br>
              Telephone: 8885051616<br>
              Customer Name : {{$orders->cus_name}}<br>
              Mobile : {{$orders->cus_mobile}}</span>
            
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-3 invoice-col">
            <table class="sidedate">
               <tr>
                <th class="float-right f-15 size2print">Date</th>
                <th class="float-right f-15 size2print">:</th>
                <th class="float-right f-15 size2print"><?php echo date('d-m-Y');?></th>
               </tr>
                <tr>
               <th class="float-right f-15 sizeprint">Time</th>
                <th class="float-right f-15 sizeprint">:</th>
                <th class="float-right f-15 sizeprint"><?php echo date('H:i:sa');?></th>
              </tr>
               <tr>
               <th class="float-right f-15 sizeprint">Sale Id</th>
                <th class="float-right f-15 sizeprint">:</th>
                <th class="float-right f-15 sizeprint">CSI{{$orders->id}}</th>
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
                <th class="sizeprint sizewidth">#</th>
                <th class="sizeprint">Products</th>
                <th class="sizeprint">Quantity</th>
                <th class="sizeprint">Price / Kgs</th>
                <th class="sizeprint">Total</th>
              </tr>
              </thead>
              <tbody>
              @foreach($order_list as $order)
              <tr class="bg-light">
                <td class="size2print">{{$loop->index+1}}</td>
                  <td>{{$order->Product->product_name}}</td>
                <!--<td class="size2print">{{$order->item_name}}</td>-->
                <td class="size2print">{{$order->qty}}</td>
                <td class="size2print">{{$order->cur_rate}}</td>
                <td class="size2print">{{$order->rate_array}}</td>
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
                <td colspan="2" class="size2print">Sub Total</td>
                <td class="size2print">Rs.{{$orders->subtotal}}</td>
              </tr>
              <tr>
                <td class="border-right" colspan="2"></td>
                <td colspan="2" class="size2print">Tax</td>
                <td class="size2print">Rs.{{$orders->tax}}</td>
              </tr>

               <tr>
                <td class="border-right" colspan="2"></td>
                <td colspan="2" class="size2print">Discount</td>
                <td class="size2print">Rs.{{$orders->discount}}</td>
              </tr>


              <tr>
                <td class="size2print" colspan="2"><strong>Grand Total</strong></td>
                <td></td>
                <td></td>
                <td class="size2print"><strong>Rs.{{$orders->grandtotal}}</strong></td>
              </tr>
              <tr>
                <td class="size2print" colspan="2"><strong>Paid Amount</strong></td>
                <td></td>
                <td></td>
                <td class="size2print"><strong>Rs.{{$orders->paid_amt}}</strong></td>
              </tr>
              <tr>
                <td class="size2print" colspan="2"><strong>Return Change</strong></td>
                <td></td>
                <td></td>
                <td class="size2print"><strong>Rs.{{$orders->return_change}}</strong></td>
              </tr>
              <tr>
                <td class="size2print" colspan="2"><strong>Paid By:</strong></td>
                <td></td>
                <td></td>
                <td class="size2print" class="text-success"><strong>{{$orders->payment_method}}</strong></td>
              </tr>
              @endforeach 
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      <!--   <div class="row">
          <div class="ml-auto col-12">
            <p class="lead text-center">Chicken Shop</p>
          </div>
        </div> -->
        <!-- /.row -->

        <div class="row no-print text-center">
          <div class="col-12">
            <a onclick="window.print()" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
             <a onclick="goBack()" rel="noopener" target="_blank" class="btn btn-info"><i class="fas fa-arrow-left"></i> Back</a>
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

function goBack() {
  window.history.back();
}

</script>
</body>
</html>
