@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">POS &nbsp;<a href="{{route('pos.index')}}" class="btn btn-primary bygrams" >By Grams</a>&nbsp;<a href="{{route('byamount')}}" class="btn btn-warning byamount blink" >By Amount</a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">POS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- fetch liveamout rate with input field hidden by jquery -->

     <span id="getLiveamount"></span>

  <!-- Close -->


    <!-- Main content -->

    <section class="content" id="div1">
      <div class="container-fluid">
<x-alert />
        <div class="row">


  



          <div class="col-md-6">
            <div class="card">
              <div class="card-header mt-3">
                <!-- <h3 class="card-title mb-3">Scan Your Barcode</h3> -->
                <input class="form-control" type="text" placeholder="Scan Your Barcode">
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">

              <form action="{{route('order.store')}}" method="POST">
                @csrf
                <table class="table table-head-fixed text-nowrap" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Products</th>

                      <th style="width: 30%;">Kgs</th>

                      <th>Per Item</th>
                      <th><i class="fas fa-window-close"></i></th>
                    </tr>
                  </thead>
                  <tbody class="tableBox">

                   <!--  <tr class="block">
=======
                    <tr class="block">
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                      <td>1.</td>
                      <td>Chicken</td>
                      <td>
                        <div class="btn-group">
                            <button type="button" class="sub btn btn-sm btn-secondary">
                              <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control rounded-0" placeholder="1" >
                            
                            <button type="button" class="add btn btn-sm btn-secondary">
                              <i class="fas fa-plus"></i>
                            </button>
                        </div>
                      </td>
                      <td><h4><span class="badge bg-success">₹ 50.00</span></h4></td>
                      <td class="remove-btn"><i class="fas fa-times text-danger"></i></td>

                    </tr> -->
                  
                  </tbody>
                </table>
              </div>
          

              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%; border-top: 0px;">Total Items</th>

                        <td style="border-top: 0px;"><input type="text" id="total_item" size="6" name="total_items"></td>
                        <th style="width:50%; border-top: 0px;">Total</th>
                        <td style="border-top: 0px;" ><input type="text" id="total_rate" readonly="" name="subtotal" size="8"></td>

                      </tr>
                      <tr>
                        <th style="border-top: 0px;">Discount Amt / %</th>
                        <td style="border-top: 0px;">

                           <input size="50" type="text" name="discount" id="disct" placeholder="₹10.00" class="form-control float-right" value="0" onkeyup="sum()" >
                        </td>
                        <th style="border-top: 0px;">Tax(%)</th>
                        <td style="border-top: 0px;"><input type="text" name="tax" id="total_tax" value="0" onkeyup="sum()" size="5"></td>
                      </tr>
                      <tr>
                        <th style="border-top: 1px solid #dee2e6;">Total Payable</th>
                        <td style="border-top: 1px solid #dee2e6;"><b><input type="text" id="total_payble" readonly="" name="grandtotal"></b></td>

                      </tr>
                    </table>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header mt-3">
                <!-- <h3 class="card-title mb-3">Search Product Name Or Code</h3> -->
                <input class="form-control" type="text" placeholder="Search Product Name Or Code">
                <div class="row mt-3">

                  <!-- <div class="col-md-4">
                    <button type="button" class="btn btn-block bg-gradient-info"> All</button>
                  </div> -->

                    <div class="col-md-4">
 
                    <button type="button" class="btn btn-block bg-gradient-info" onclick="getCategoryType(0)">ALL</button>

                   </div>

                  @foreach($category_list as $category)
                  <div class="col-md-4">
                   <button type="button" class="btn btn-block bg-gradient-info" onclick="getCategoryType('{{$category->id}}')">{{$category->name}}</button><br/>
                  </div>
                  @endforeach

                 <!--  <div class="col-md-4">

                    <button type="button" class="btn btn-block bg-gradient-info"> Veg</button>
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-block bg-gradient-info"> Non-Veg</button>

                  </div> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-auto" style="height: 245px" >
                <span id="add_details"></span>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            

                <div class="card-body row">
                  <div class="col-md-4">

                    <button type="button" class="btn btn-block bg-gradient-danger" onclick="window.location.reload()"> Cancel</button>
                    <!-- <button type="button" class="btn btn-block bg-gradient-warning"> Hold</button> -->
                    <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#modal-default" > Payment</button>

                  </div>
                </div>
              
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Payment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <!-- <form class="form-horizontal" action="{{route('order.store')}}" method="POST">
              @csrf -->
                <div class="card-body">
                  <!-- <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Customers</label>
                    </div> -->

                   <!--  <div class="col-sm-7">
                       <select class="form-control select2bs4" style="width: 100%;" id="paidby" onchange="customerType(this.value)" name="cust_id">
                                <option value="">Select</option>
                                <option value="0">New</option>
                                @foreach($customer_list as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                               
                      </select>

                        <div id="customerinput">
                        </div>

                    </div>
                  </div> -->

                   <div class="form-group row" >

                    <div class="col-sm-5">
                      <label  class="col-form-label">Customer Mobile</label>
                    </div>
                    <div class="col-sm-7">

                      <input type="text" class="form-control" id="cus_mobile"  placeholder="" name="cus_mobile">
                    </div>
                  </div>

                   <div class="form-group row" >
                    <div class="col-sm-5">
                      <label  class="col-form-label">Customer Name</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="cus_name"  placeholder="" name="cus_name">
                    </div>
                  </div>

                  <div class="form-group row" >

                    <div class="col-sm-5">
                      <label  class="col-form-label">Total Payable Amount</label>
                    </div>
                    <div class="col-sm-7">

                      <input type="text" class="form-control" id="total_payment"  placeholder="" >

                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Total Purchased Items</label>
                    </div>
                    <div class="col-sm-7">

                      <input type="text" class="form-control" id="total_items"  placeholder="5" name="">

                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Paid By</label>
                    </div>
                    <div class="col-sm-7">

                      <select class="form-control" style="width: 100%;" id="paidby" onchange="paymentMethod(this.value)" name="payment_method">
                        <!-- select2bs4 -->
                                <option value="Cash">Cash</option>
                                <option value="Nett">Nett</option>
                                <option value="VISA">VISA</option>
                                <option value="4">Master Card</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Debit">Debit</option>
                                <option value="credit">credit</option>
                                <option value="ONLINE PAYMENT">ONLINE PAYMENT</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row cardinput">

                  </div>

                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Paid Amount</label>
                    </div>
                    <div class="col-sm-7">

                      <input type="text" class="form-control" id="paid_amount" placeholder="" onkeyup="returnAmount(this.value)" name="paid_amt" >

                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Return Change</label>
                    </div>
                    <div class="col-sm-7">

                      <input type="text" class="form-control" id="return_amount" readonly placeholder="₹0.00" name="return_change" >
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Save changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('script')

<script>

   function customer_details() {

  var cust_name = document.getElementById("cust_name").value;
  var cust_mobile = document.getElementById("cust_mobile").value;
  var cust_email = document.getElementById("cust_email").value;
  var card_number = document.getElementById("card_number").value;

    var token = "{{ csrf_token() }}";
    $.ajax({

            url: "{{route('order.store')}}",
            // url: "liveamount",
            method: "POST",
            data: {cust_name:cust_name,cust_mobile:cust_mobile, _token: token},
            success:function(data){

             console.log('inserted');
             }

            })
}


// $(document).ready(function(){

 function getCategoryType(value){

  var category_id=value;
    var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getProduct",
            method: "POST",
            dataType: "json",
            data: {category_id:category_id, _token: token},
            success:function(data){
              // alert(data.length);

               var tab= ""; 

              for (var i = 0; i < data.length; i++) {

 tab+='<div class="btn btn-app" onclick="add_product('+data[i].id+')" onkeyup="sum()"><img src="storage/app/public/product/'+data[i].product_img+'" width="60" height="50" > <span style="font-size: 16px">'+data[i].product_name+'<input type="hidden" name=""  id="product_name'+data[i].id+'" value="'+data[i].product_name+'"><input type="hidden" name="" id="incre" value="'+data[i].id+'"></span></div>';

 // <span class="badge bg-warning">5kgs</span> 
 
              }

               $("#add_details").html(tab);

             }

            });
  }
// });




function add_product(id){



    var product_id=id;

      // alert(product_id);

  var token = "{{ csrf_token() }}";

                 $.ajax({

            url: "addProduct",
            method: "POST",
            dataType: "json",
            data: {product_id:product_id, _token: token},
            success:function(data){

                 if(data.success=='success'){
                  // alert("Producte already Added! Please Chose Other Product");

                  sum(product_id);
                  incrementValue(product_id);

                 }else{

                  var pergram=data[0].rate/1000;
                  var grams=data[0].rate/pergram;

                $(".tableBox").append('<tr class="block"><td></td><td><input type="text" class="form-control rounded-0 item_name" placeholder="1"  id="item_name'+data[0].product_id+'" name="item_name[]" value="'+data[0].product_name+'"></td><td><div class="btn-group"><button type="button" class="btn btn-sm btn-secondary" onclick="decrementValue('+data[0].product_id+')"><i class="fas fa-minus"></i></button><input type="text" class="form-control rounded-0 qty" placeholder="1" value="1000" id="qty'+data[0].product_id+'" name="qty[]" onkeyup="sum('+data[0].product_id+')"><button type="button" class="btn btn-sm btn-secondary" onclick="incrementValue('+data[0].product_id+')"><i class="fas fa-plus" ></i></button></div></td><td><h4><input type="text" class="form-control rounded-0 rate_array" placeholder="1" name="rate_array[]"  id="rate'+data[0].product_id+'"  value="'+data[0].rate+'" onkeyup="sum('+data[0].product_id+')"><input type="hidden" class="form-control rounded-0 cur_rate" placeholder="1" name="cur_rate[]"  id="cur_rate'+data[0].product_id+'"  value="'+data[0].rate+'"></h4></td><td><input type="hidden" class="form-control rounded-0 total_count" placeholder="1" name="total_count[]" id="total_count'+data[0].product_id+'"></h4></td><td onclick="remove_product('+data[0].product_id+')"><i class="fas fa-times text-danger remove-btn" ></i></td></tr>');

                // <span class="badge bg-success">'+data[0].rate+'</span>

                // $(".tableBox").append('<tr class="block"><td></td><td><input type="text" class="form-control rounded-0 item_name" placeholder="1"  id="item_name'+data[0].product_id+'" name="item_name[]" value="'+data[0].product_name+'"></td><td><div class="btn-group"><button type="button" class="btn btn-sm btn-secondary" onclick="decrementValue('+data[0].product_id+')"><i class="fas fa-minus"></i></button><input type="text" class="form-control rounded-0 qty" placeholder="1" value="1" id="qty'+data[0].product_id+'" name="qty[]" onkeyup="sum('+data[0].product_id+')"><button type="button" class="btn btn-sm btn-secondary" onclick="incrementValue('+data[0].product_id+')"><i class="fas fa-plus" ></i></button></div></td><td><h4><span class="badge bg-success">'+data[0].rate+'</span><input type="hidden" class="form-control rounded-0 rate_array" placeholder="1" name="rate_array[]"  id="rate'+data[0].product_id+'"  value="'+data[0].rate+'" ></h4></td><td><input type="hidden" class="form-control rounded-0 total_count" placeholder="1" name="total_count[]" id="total_count'+data[0].product_id+'"></h4></td><td onclick="remove_product('+data[0].product_id+')"><i class="fas fa-times text-danger remove-btn" ></i></td></tr>');

                
                 sum(data[0].product_id);
              }
            }

          });

                 $('tbody').on('click','.remove-btn',function(){

                  $(this).parent().parent().remove();
                  sum();
                 });
               }


                 function incrementValue(id)
{
  

    var value = parseInt(document.getElementById('qty'+id).value, 10);
    value = isNaN(value) ? 0 : value;
    var kg=1000;
    if(value<10000000){
        value=value+kg;
          document.getElementById('qty'+id).value = value;
    }
    sum(id);
}

function decrementValue(id)
{

    var value = parseInt(document.getElementById('qty'+id).value, 10);
    value = isNaN(value) ? 0 : value;
    var kg=1000;
    if(value>1){
        value=value-kg;
            document.getElementById('qty'+id).value = value;
    }
      sum(id);

}

$(document).ready(function(){

    // var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getLiveamount",
            // url: "liveamount",
            method: "GET",
            dataType: "json",
            // data: {franchisee_id:x, _token: token},
            success:function(data){

               var tab= ""; 

              for (var i = 0; i < data.length; i++) {

 tab+='<input type="hidden" name=""  id="product'+data[i].product_id+'" value="'+data[i].rate+'"></div>';
 
              }

               $("#getLiveamount").html(tab);

               getCategoryType(0);

             }

            });
});






   function sum(product_id) {


         // $('#rate'+product_id).each(function(){

             var qty = parseFloat($('#qty'+product_id).val());
             var rate1= parseFloat($('#rate'+product_id).val());

             // alert(rate);

             // $('#qty'+product_id).val(qty);


             var dbrate = parseFloat($('#product'+product_id).val());

                  var pergram=dbrate/1000;

                  var total_grams=rate1/pergram;

                  var total_price=qty*pergram;

                  // if(product_id=='grams'){

                      $('#qty'+product_id).val(total_grams);

                  // }

                  // if(product_id=='amount'){
                  // $('#rate'+product_id).val(total_price);  
                  // }


                 // $('#rate'+product_id).val(total_price);
                 // $('#qty'+product_id).val(total_grams);
                
             var rate= parseFloat($('#rate'+product_id).val());

             var total=rate;
             console.log(total);
             // alert(total);
             // // total_count

                $('#total_count'+product_id).val(total);

              var arr = document.getElementsByClassName('rate_array');
            var tot_gs = 0;
            for(var i=0;i<arr.length;i++){
              tot_gs += parseFloat(arr[i].value);

              }
              
              $('#total_rate').val(tot_gs);

             

               var arr_qty = document.getElementsByClassName('qty');
              // alert(arr_qty.length);
            var tot_qty = 0;
            for(var i=0;i<arr_qty.length;i++){
              tot_qty += parseFloat(arr[i].value);

              } 

              
              $('#total_qty').val(tot_qty);

              // var tt_rate=tot_gs*tot_qty;

               // alert(tot_qty);

            var arr_item = document.getElementsByClassName('item_name');
            var tot_item = 0;
            for(var i=0;i<arr_item.length;i++){
              // tot_item += parseFloat(arr_item[i].value);
              tot_item = i;

              }
              
              $('#total_item').val(i);

              $('#total_items').val(i);

                var arr_count = document.getElementsByClassName('total_count');
            var tot_count = 0;
            for(var i=0;i<arr_count.length;i++){
              tot_count += parseFloat(arr_count[i].value);

              }

                $('#total_rate').val(tot_count);

             // var tax =parseFloat(document.getElementById('tax').value);

             var disct =parseFloat(document.getElementById('disct').value);
             var total_tax =parseFloat(document.getElementById('total_tax').value);
             
             var totaltax=tot_count*(total_tax/100);
             // alert(total_tax);

             var payble_amt=tot_count+totaltax-disct;

              $('#total_payble').val(payble_amt);

              $('#total_payment').val(payble_amt);
              // $('#total_tax').val(total_tax);


            // });

             // $('#total_rate').val(rate);
        }


    function remove_product(id){

      var popup = confirm("Are you sure for remove this Product?");

    var product_id=id;

    // alert(product_id);

  var token = "{{ csrf_token() }}";

                 $.ajax({

            url: "removeProduct",
            method: "POST",
            dataType: "json",
            data: {product_id:product_id, _token: token},
            success:function(){

             // location.reload();

              // getCart();

              // location.reload()

               // table.ajax.reload();
            }

          });

               }


     function getCart(){

      alert("You entered in Getcart");

       $.ajax({

            url: "getCart",
            method: "GET",
            dataType: "json",
            success:function(data){

               var tab= "";

              for (var i = 0; i < data.length; i++) {

                  // tab += '<tr class="block"><td></td><td><input type="text" class="form-control rounded-0" placeholder="1"  id="item_name" name="item_name[]" value="'+data[0].product_id+'"></td><td><div class="btn-group"><button type="button" class="btn btn-sm btn-secondary" onclick="decrementValue('+data[0].product_id+')"><i class="fas fa-minus"></i></button><input type="text" class="form-control rounded-0" placeholder="1" value="1" id="qty'+data[0].product_id+'" name="qty[]"><button type="button" class="btn btn-sm btn-secondary" onclick="incrementValue('+data[0].product_id+')"><i class="fas fa-plus" ></i></button></div></td><td><h4><span class="badge bg-success">ddd</span><input type="hidden" class="form-control rounded-0 rate_array" placeholder="1" name="rate_array[]"  id="rate'+data[0].product_id+'"  value="dddd" ></h4></td><td onclick="remove_product('+data[0].product_id+')"><i class="fas fa-times text-danger remove-btn" ></i></td></tr>';
 
              }

               $(".tableBox").html(tab);


            }
          });

     }


     $(document).ready(function () {
        deleteAll ();
    });

     function deleteAll(){

      var refreshedPage='';

    $.ajax({

            url: "delete_all_cart", 
            method: "GET",
            dataType: "json",
            success:function(data){

              if(data.success=="success"){

              // console.log("delete all");
              // table.ajax.reload();
              // $('.tableBox').remove();
             // $(".tableBox").html($(page).find(".tableBox").html());
             // $('.card').load(document.URL +  ' .card');//working
               // $(".table").hide().html(data).fadeIn('fast');
               // $(".table").toggle().toggle();
             // refreshedPage = $(data);
             //            newDemo = refreshedPage.find(".tableBox").html();
             //            $('.tableBox').html(newDemo);
           }
 
              }

            });
  }

  

  function customerType(value){
    
    var tab='';

    if(value=='0'){

      tab+='<div class="col-sm-2"><label  class="col-form-label"> Name</label></div><div class="col-sm-10"><input type="text" class="form-control" id="cus_name" placeholder="Enter Name" name="cust_name"></div>';

      tab+='<div class="col-sm-2"><label  class="col-form-label"> Mobile</label></div><div class="col-sm-10"><input type="text" class="form-control" id="cus_mobile" placeholder="Enter mobile" name="cust_mobile"></div>';

      tab+='<div class="col-sm-2"><label  class="col-form-label"> Email</label></div><div class="col-sm-10"><input type="text" class="form-control" id="cus_email" placeholder="Enter Email" name="cust_email"></div>';

       $("#customerinput").html(tab).show();

    }else{

      $("#customerinput").hide();

    }

  }

  function paymentMethod(value){
    var tab='';

    if(value=='4'){

      tab='<div class="col-sm-5"><label  class="col-form-label">Card Number</label></div><div class="col-sm-7"><input type="text" class="form-control" id="card_number" placeholder="Enter Card Number" name="card_number"></div>';

       $(".cardinput").html(tab).show();

    }else{

      $(".cardinput").hide();

    }

  }

  function returnAmount(value){

    var paid_amount=document.getElementById('paid_amount').value;
    var total_payble=document.getElementById('total_payment').value;

    var return_amount=total_payble-paid_amount;

    $('#return_amount').val(return_amount);

    // customer_details();

  }

  $(document).ready(function(){
    $(".toast").toast('show');
  });


</script>


@endsection