@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Purchase Order List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Purchase Order</li>
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

               <form action="{{route('purchaseorder.store')}}" method="POST">
                @csrf
                  <div class="row">

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Branch</label>
                       <select class="form-control" name="branch_id" id="branch_id" onchange="brnach_type()">
                         <option>Select Branch</option>
                         @foreach($banch_list as $banch)

                          <option value="{{$banch->id}}">{{$banch->location}}</option>

                         @endforeach
                         
                       </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Franchisee</label>
                       <select class="form-control" name="franchisee_id" id="franchisee_id" onchange="franchisee_type()">

                        <!-- <div id="mySelect"></div> -->
                         <option>Select Franchisee</option>
                         @foreach($franchisee_list as $franchisee)

                          <option value="{{$franchisee->id}}">{{$franchisee->name.'('}}FRD00{{$franchisee->id.')'}}</option>

                         @endforeach
                         
                       </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                         <label>Franchisee Name</label>
                        <input type="text" id="f_name" class="form-control" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Franchisee Mobile Number</label>
                        <input type="text" id="f_mobile" class="form-control"  >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Branch Name</label>
                        <input type="text" class="form-control" id="f_branch">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Required Qty</label>
                        <input type="text" name="qty" id="qty" class="form-control" placeholder="Auto"  onkeyup="sum()">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="" class="form-control"  >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Today Rate(kg)</label>
                        <input type="text" id="rate" class="form-control" onkeyup="sum()" value="{{$product_rate}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Total Amount</label>
                        <input type="text" name="amount" class="form-control" id="amount" required onkeyup="sum()">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Supplier Name</label>
                        <input type="text" name="supplier_name" class="form-control" placeholder="Enter Supplier Name" id="address" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile</label>
                        <input type="text"  name="mobile" class="form-control" placeholder="Enter Your mobile" id="mobile" required>
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
             
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
    <div class="modal fade" id="add-account">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Purchase Order</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Add</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->

@endsection

@section('script')
<script type="text/javascript">

  function sum() {

             var qty = parseFloat($('#qty').val()) ;
            var rate = parseFloat($('#rate').val()) ;
            var total=qty*rate;

             $('#amount').val(total);
        }

         function franchisee_type() {


  var x = document.getElementById("franchisee_id").value;


    var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getFranchisee",
            // url: "liveamount",
            method: "POST",
            dataType: "json",
            data: {franchisee_id:x, _token: token},
            success:function(data){

               $('#f_mobile').val(data['0'].mobile);
               $('#f_name').val(data['0'].name);
               $('#f_branch').val(data['0'].city);
          
             }

            })
}

 function brnach_type() {

  var x = document.getElementById("branch_id").value;


    var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getBranch",
            // url: "liveamount",
            method: "POST",
            dataType: "json",
            data: {branch_id:x, _token: token},
            success:function(data){

             
              var tab= " ";
              for (var i = 0; i < data.length; i++) {

                tab += "<option value='"+data[i].location+"'>"+data[i].location+"</option>";

                tab="<input type='text'/>";
              
              }

               $("#mySelect").html(tab);
          
             }

            })
}



</script>

@endsection