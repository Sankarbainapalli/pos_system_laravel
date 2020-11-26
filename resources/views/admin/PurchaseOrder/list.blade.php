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
            <x-alert />
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
                         <option value="0">Select Branch</option>
                         @foreach($banch_list as $banch)

                          <option value="{{$banch->id}}">{{$banch->name}}</option>

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
                         <!-- <option>Select Franchisee</option>
                         @foreach($franchisee_list as $franchisee)

                          <option value="{{$franchisee->id}}">{{$franchisee->name.'('}}FRD00{{$franchisee->id.')'}}</option>

                         @endforeach
                          -->
                       </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                         <label>Franchisee Name</label>
                        <input type="text" id="f_name" class="form-control" readonly="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Franchisee Mobile Number</label>
                        <input type="text" id="f_mobile" class="form-control"  readonly="">
                      </div>
                    </div>
                   <!--  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Branch Name</label>
                        <input type="text" class="form-control" id="f_branch">
                      </div>
                    </div> -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Required Qty</label>
                        <input type="text" name="qty" id="qty" class="form-control" placeholder="Auto"  onkeyup="sum()">

                         <input type="button" onclick="ReadWeight();" value="GET" />
                      </div>
                    </div>
                   
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Today Rate(kg)</label>
                        <input type="text" id="rate" name="rate" class="form-control" onkeyup="sum()" value="{{$product_rate}}" readonly="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Total Amount</label>
                        <input type="text" name="total_amount" class="form-control" id="amount" required onkeyup="sum()">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Supplier Name</label>
                        <input type="text" name="sup_name" class="form-control" placeholder="Enter Supplier Name" id="address" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Supplier Mobile</label>
                        <input type="text"  name="sup_mobile" class="form-control" placeholder="Enter Your mobile" id="mobile" required maxlength="10">
                      </div>
                    </div>

                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Supplier Date</label>
                        <input type="date" name="pur_date" class="form-control"  >
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

               <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Branch Id</th>
                    <th>Franchisee Id</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Total Amount</th>
                    <th>Supplier Name</th>
                    <th>Supplier Mobile</th>
                    <th>Purchase Date</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($pur_list as $purchaseorder)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>BRN00{{$purchaseorder->branch_id}}({{$purchaseorder->Branch->name}})</td>
                    <td>FRD00{{$purchaseorder->franchisee_id}}({{$purchaseorder->Franchisee->name}})</td>
                    <td>{{$purchaseorder->qty}}</td>
                    <td>{{$purchaseorder->rate}}</td>
                    <td>{{$purchaseorder->total_amount}}</td>
                    <td>{{$purchaseorder->sup_name}}</td>
                    <td>{{$purchaseorder->sup_mobile}}</td>
                    <td>{{$purchaseorder->pur_date}}</td>
                    <td><?php echo date('d-m-y H:i:s', strtotime($purchaseorder->created_at)) ?></td>
               
                    <td> 
                       <div class="btn-group">
                          <a href="{{route('purchaseorder.edit',$purchaseorder->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                       <a href="{{route('purchaseorder.destroy', $purchaseorder->id)}}">  <button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button></a> 
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
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
            method: "POST",
            dataType: "json",
            data: {branch_id:x, _token: token},
            success:function(data){

               var tab= "";

              tab += "<option value=''>Select Franchisee</option>";

              for (var i = 0; i < data.length; i++) {

                  tab += "<option value='"+data[i].id+"'>"+'FRD00'+data[i].id+"</option>";
 
              }

               $("#franchisee_id").html(tab);
          
             }

            })
}


function ReadWeight()
{
$.ajax({
  type: "post",
  url: "http://www.noris.in/WeightAPI/getweight.php?ID=123",
 
async:false,
cache: false,
success: function(data){
  var RES=data.split(":");

  alert(RES);
  document.getElementById("qty").value=RES[1];
}
});
}




</script>

@endsection