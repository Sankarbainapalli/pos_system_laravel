@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">POS</h1>
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


    <!-- Main content -->
    <section class="content" id="div1">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-5">
            <div class="card">
              <div class="card-header mt-3">
                <!-- <h3 class="card-title mb-3">Scan Your Barcode</h3> -->
                <input class="form-control" type="text" placeholder="Scan Your Barcode">
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">

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
                        <td style="border-top: 0px;"><input type="text" id="total_item" size="6"></td>
                        <th style="width:50%; border-top: 0px;">Total</th>
                        <td style="border-top: 0px;" ><input type="text" id="total_rate" readonly="" ></td>
                      </tr>
                      <tr>
                        <th style="border-top: 0px;">Discount Amt / %</th>
                        <td style="border-top: 0px;">
                           <input size="50" type="text" name="disct" id="disct" placeholder="₹10.00" class="form-control float-right" value="0" onkeyup="sum()">
                        </td>
                        <th style="border-top: 0px;">Tax (18.00%)</th>
                        <td style="border-top: 0px;"><input type="text" name="tax" id="tax" value="18" onkeyup="sum()"></td>
                      </tr>
                      <tr>
                        <th style="border-top: 1px solid #dee2e6;">Total Payable</th>
                        <td style="border-top: 1px solid #dee2e6;"><b><input type="text" id="total_payble" readonly=""></b></td>
                      </tr>
                    </table>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
          <div class="col-md-7">
            <div class="card">
              <div class="card-header mt-3">
                <!-- <h3 class="card-title mb-3">Search Product Name Or Code</h3> -->
                <input class="form-control" type="text" placeholder="Search Product Name Or Code">
                <div class="row mt-3">
                  <!-- <div class="col-md-4">
                    <button type="button" class="btn btn-block bg-gradient-info"> All</button>
                  </div> -->

                  @foreach($category_list as $category)
                  <div class="col-md-4">
                    <button type="button" class="btn btn-block bg-gradient-info"> {{$category->name}}</button>
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
                    <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#modal-default"> Payment</button>
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
            <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Customer Mobile</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="mobile" placeholder="Customer Mobile" name="c_name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Total Payable Amount</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="total_payment"  placeholder="">
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
                      <select class="form-control select2bs4" style="width: 100%;" id="paidby">
                          <option selected="selected">Cash</option>
                          <option>Online Payment</option>
                          <option>Net</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Paid Amount</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="paidamt" placeholder="₹200.00" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label  class="col-form-label">Return Change</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="return" readonly placeholder="₹0.00" >
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('script')

<script>
$(document).ready(function(){

    // var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getProduct",
            // url: "liveamount",
            method: "GET",
            dataType: "json",
            // data: {franchisee_id:x, _token: token},
            success:function(data){

               var tab= ""; 

              for (var i = 0; i < data.length; i++) {

 tab+='<div class="btn btn-app" onclick="add_product('+data[i].id+')" onkeyup="sum()"><span class="badge bg-warning">5kgs</span> <img src="https://5.imimg.com/data5/WU/AJ/MY-58631066/broiler-live-chicken-500x500.jpg" width="60" height="50" > <span style="font-size: 16px">'+data[i].product_name+'<input type="hidden" name=""  id="product_name'+data[i].id+'" value="'+data[i].product_name+'"><input type="hidden" name="" id="incre" value="'+data[i].id+'"></span></div>';
 
              }

               $("#add_details").html(tab);

             }

            });
});

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

                $(".tableBox").append('<tr class="block"><td></td><td><input type="text" class="form-control rounded-0 item_name" placeholder="1"  id="item_name'+data[0].product_id+'" name="item_name[]" value="'+data[0].product_name+'"></td><td><div class="btn-group"><button type="button" class="btn btn-sm btn-secondary" onclick="decrementValue('+data[0].product_id+')"><i class="fas fa-minus"></i></button><input type="text" class="form-control rounded-0 qty" placeholder="1" value="1" id="qty'+data[0].product_id+'" name="qty[]" onkeyup="sum('+data[0].product_id+')"><button type="button" class="btn btn-sm btn-secondary" onclick="incrementValue('+data[0].product_id+')"><i class="fas fa-plus" ></i></button></div></td><td><h4><span class="badge bg-success">'+data[0].rate+'</span><input type="hidden" class="form-control rounded-0 rate_array" placeholder="1" name="rate_array[]"  id="rate'+data[0].product_id+'"  value="'+data[0].rate+'" ></h4></td><td><input type="hidden" class="form-control rounded-0 total_count" placeholder="1" name="total_count[]" id="total_count'+data[0].product_id+'"></h4></td><td onclick="remove_product('+data[0].product_id+')"><i class="fas fa-times text-danger remove-btn" ></i></td></tr>');
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
    if(value<1000){
        value++;
            document.getElementById('qty'+id).value = value;
    }
    sum(id);
}

function decrementValue(id)
{

    var value = parseInt(document.getElementById('qty'+id).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('qty'+id).value = value;
    }
      sum(id);

}







   function sum(product_id) {

         // $('#rate'+product_id).each(function(){

             var qty = parseFloat($('#qty'+product_id).val());
             var rate = parseFloat($('#rate'+product_id).val());

             var total=qty*rate;
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

             var tax =parseFloat(document.getElementById('tax').value);
             var disct =parseFloat(document.getElementById('disct').value);
             
             var total_tax=tot_count*(tax/100);

             var payble_amt=tot_count+total_tax-disct;

              $('#total_payble').val(payble_amt);

              $('#total_payment').val(payble_amt);


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

               $(".tableBox").append(tab);


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
  
 

</script>

@endsection