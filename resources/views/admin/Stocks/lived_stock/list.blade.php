@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lived Stocks List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Lived Stocks</li>
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
               <!--  <h3 class="card-title justify-content-center ">Stocks List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-stock">Add Stock</button> -->
                
                <form action="{{route('stock.store')}}" method="POST">
                  @csrf
                  <div class="row col-md-12" >
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                     <div class="row">
                      <div class="col-sm-6">
                      <div class="form-group">
                       <label>Product Type</label>
                           <select name="product_id"  id="product_id" class="form-control" style="width: 100%;" onchange="product_type()" required >
                               <option >Select Product Type</option>
                               @foreach($product_list as $product)

                               <option value="{{$product->id}}" selected="selected">{{$product->Category->name. '('}}{{($product->product_name.')')}}</option>

                                @endforeach


                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                   
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Franchisee</label>
                        <select name="franchisee_id" class="form-control" id="franchisee_id">

                          @foreach($franchisee_list as $franchisee)

                              @if(Auth::user()->role_id == 'SUPERADMIN')

                                  <option value="{{$franchisee->id}}">FRD00{{$franchisee->id.'('}}{{$franchisee->name.')('}}{{$franchisee->Branch->location.')'}}</option>

                              @else

                             @if(Auth::user()->frans_id==$franchisee->id)

                            <option value="{{$franchisee->id}}" {{ (Auth::user()->frans_id==$franchisee->id) ? 'selected' : '' }}>{{$franchisee->name.'('}}FRD00{{$franchisee->id.')'}}</option>

                           @endif
                           @endif

                          @endforeach
                         
                        
                        </select>
                      </div>
                    </div>
                  </div>

                      <div class="row">
                   
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Total weight(kg)</label>
                        @if(Auth::user()->role_id=='SUPERADMIN')
                        <input type="text" name="qty" id="qty" class="form-control" placeholder="weiging machine" onkeyup="sum()" >
                        @else

                        <input type="text" name="qty" id="qty" class="form-control" placeholder="weiging machine" onkeyup="sum()" readonly="">

                        @endif
                        <span onclick="getWeight()" class="btn btn-sm btn-primary">Get Weight</span>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        
                           <label>Ex-Form Rate</label>                         
                          <input type="text" name="rate" id="rate" class="form-control" placeholder="rate" onkeyup="sum()"  readonly="" >
                          <!-- value="{{$product_rate}}" -->
                       

                    
                        <!-- <select class="form-control" name="rate" id="rate" disabled="">
                          @foreach($liveamount_list as $liveamount)
                          <option >{{$liveamount->chicken}}</option>
                          @endforeach
                        </select> -->


                      </div>
                    </div>
                  </div>
                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Amount" name="amount"  id="total" onkeyup="sum()" readonly="">
                      </div>
                    </div>

                  </div>
                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Add</button>
                      </div>
                    </div>

                  </div>
                  </div>


                 </div>
                  
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Franchisee ID</th>
                    <th>Name</th>
                    <th>Total Qty</th>
                    <th>Ex-Form Rate</th>
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
                    <td>FRD00{{$stock->franchisee_id}}</td>
                    <td>{{$stock->Product->product_name}}</td>
                    <td>{{$stock->qty}} ||       <!-- <a href="{{route('stock.edit',$stock->id)}}"><span class="badge badge-primary badge-lg"> Add qty</span>
                          </a> --></td>
                    <td>

                      {{$stock->rate}}
                 
                   
                    </td>

                    <td> 

                      {{$stock->amount}}
                     
                    </td>


                    <td><?php echo date('d-m-Y H:i:s',strtotime($stock->created_at));?></td>

                    @if(Auth::user()->role_id == 'SUPERADMIN')
                  
                    
                    
                    <td> 
                      <div class="btn-group">
                    
                          <a href="{{route('stock.destroy',$stock->id)}}"><button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button></a>
                      </div>
                    </td>
                  </tr>
                  @endif
                 
                  @endforeach
            
                  </tbody>
             
                </table>



                <!-- <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>OverAll Stocks</th>
                    <th>Live Stocks</th>
                    <th>Dressed Stocks</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Branch 1</td>
                    <td>56</td>
                    <td>19</td>
                    <td>400</td>
                    <td>50000</td>
                    <td> 
                      <div class="btn-group">
                          <a href=""><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
            
                  </tbody>
                  <tfoot>
                  <tr>
                    <th colspan="4">Total</th>
                    <th>54000</th>
                    <th></th>
                  </tr>
                  <tr>
                    <th>OverAll Stocks</th>
                    <th>Live Stocks</th>
                    <th>Dressed Stocks</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                  </tfoot> -->
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

@section('script')
<script type="text/javascript">

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
            // url: "getExformrate",
            url: "getRate",
            method: "POST",
            data: {product_id:x, _token: token},
            dataType: "json",
            success:function(data){

             if(data.empty=='empty'){

                alert("Please Add The Product Rate");
                 $('#rate').val(0);

              }else{

                 $('#rate').val(data[0].rate);
                sum();
              }


             }

            })
}

function getWeight()
{

  var franchisee_id=document.getElementById('franchisee_id').value;
  
var token = "{{ csrf_token() }}";
$.ajax({
  type: "GET",
  url: "getApiData",
  // url: "http://askmeguru.com/APISETUP/api.php",
 dataType: "json",
 data: {franchisee_id:franchisee_id, _token: token},

success: function(data){

  document.getElementById("qty").value=data.total_weight;
 sum();
}
});
}

</script>

@endsection