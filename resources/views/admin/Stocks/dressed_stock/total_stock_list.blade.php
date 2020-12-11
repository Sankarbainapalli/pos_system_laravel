@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Total Stocks List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Total Stock</li>
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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Franchisee ID</th>
                    <th>Category Name</th>
                    <th>Product Name</th>
                    <th>Total Qty</th>
                    <th>Rate</th>
                    <th>Total Amount</th>
                    <th>Date</th>
                    @if(Auth::user()->role_id == 'SUPERADMIN')
                    <th>Action</th>
                    @endif
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($stock_list as $stock)
                    
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>FRD00{{$stock->franchisee_id}}({{$stock->Franchisee->name}})</td>
                    <td>{{$stock->Category->name}}</td>
                    <td>{{$stock->Product->product_name}}</td>
                    <td>{{$stock->qty}}</td>
                    <td> {{$stock->rate}}</td>
                    <td> 
                      {{$stock->qty * $stock->rate}}
                    </td>

                    <td><?php echo date('d-m-Y H:i:s',strtotime($stock->created_at));?></td>

                    @if(Auth::user()->role_id == 'SUPERADMIN')
                    <td> 
                      <div class="btn-group">
                    
                          <a href="{{route('stock.destroy',$stock->id)}}"><button type="button" class="btn btn-danger" onclick="confirm('You want to delete?')">
                            <i class="far fa-trash-alt"></i>
                          </button></a>
                      </div>
                    </td>
                   @endif
                  </tr>
              
                 
                  @endforeach
            
                  </tbody>
             
                </table>
              
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

  function category_type(value) {

    // alert(value);

  var product_id = value;
  // var product_id = document.getElementById("product_category").value;

    var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getProduct1",
            method: "POST",
            dataType: "json",
            data: {product_category:product_id, _token: token},
            success:function(data){

                var tab= "";

                if(data.length==0){
                  
                    alert("No Data Found! Please Add product in the product Module");
                    // window.location.href = "product";
                  }else{ 

                    tab += "<option value=''>Select Product</option>";}

                    for (var i = 0; i < data.length; i++) {

                        tab += "<option value='"+data[i].id+"'>"+data[i].product_name+"</option>";
       
                    }

               $("#product_id").html(tab);

             }

            })
}




  function sum() {

             var qty = parseFloat($('#qty').val()) ;
            var rate = parseFloat($('#rate').val()) ;
            var total=qty*rate;

             $('#total').val(total);
        }

       function product_type() {

  var x = document.getElementById("product_id").value;

    var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getRate",
            method: "POST",
            data: {product_id:x, _token: token},
            dataType: "json",
            success:function(data){

              if(data.empty=='empty'){

                alert("Please Add The Product Rate");
                  $('#rate').val(0);
                  // $('#qty').val(0);

              }else{

                 $('#rate').val(data[0].rate);
                  // $('#qty').val(0);
                   sum();
              }
              

             }

            })
}

// if(data != 'SUCCESS'){
              //   alert('Something Wrong');
              // }else{
              //   // alert("fdsdf");
              //       // location.reload();
              //       console.log("success");

              // }


// function getWeight()
// {
// $.ajax({
//   type: "GET",
//   url: "getApiData",
//  dataType: "json",
// success: function(data){

//   document.getElementById("qty").value=data.total_weight;
//  sum();
// }
// });
// }

function getWeight()
{

  var franchisee_id=document.getElementById('franchisee_id').value;
  
 var token = "{{ csrf_token() }}";
 $.ajax({
  type: "GET",
  // type: "POST",
  url: "getApiData",
   // data: {franchisee_id:franchisee_id, _token: token},
  // url: "http://askmeguru.com/APISETUP/api.php",
 dataType: "json",
 success: function(data){
  // alert(data);
 document.getElementById("qty").value=data.total_weight;
  sum();
}
});
}


</script>

@endsection