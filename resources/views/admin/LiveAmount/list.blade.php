@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Today Rate</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Today Rate</li>
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
                @if(Auth::user()->role_id == 'SUPERADMIN')
              <div class="card-header">
                <!-- <h3 class="card-title justify-content-center ">Live Amount (Main Shop)</h3> -->
              
                <form action="{{route('liveamount.store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                       <label>Franchisee name</label>
                        <select class="form-control" name="branch_id">
                          @foreach($franchisee_list as $franchisee)
                            <option value="{{$franchisee->id}}">FRN00{{$franchisee->id}}({{$franchisee->name}})</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">

                        <label>Product Category</label>
                            <select onchange="product_type(this.value)" name="category_id" id="product_category"  class="form-control" style="width: 100%;" >
                              <option value="0">Select Category</option>
                               @foreach($category_list as $category)

                                @if($type==$category->id)
                                <option value="{{$category->id}}" selected="selected">{{$category->name}}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                                
                                @endforeach
                            </select>
                        </div>
                      </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                     
                        <label>Product Type</label>
                            <select name="product_id"  class="form-control" style="width: 100%;" id="product_id">
                              <!--  @foreach($product_list as $product)
                                <option value="{{$product->id}}">{{$product->product_name}}</option>
                                
                                @endforeach -->
                            </select>

                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                      
                        <label>Rate</label>
                        <input type="text" name="rate" class="form-control" placeholder="Rate" id="name3" required>
                      </div> 
                    </div>
                    <div class="col-sm-2 mt-2">
                      <div class="form-group">
                         <label></label>
                        <button type="submit" class="btn btn-success w-100">Add</button>
                      </div> 
                    </div>
                  </div>
                </form>

              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Branch</th>
                    <th>Category</th>
                    <th>Product type</th>
                    <th>Rate</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($liveamount_list as $liveamount)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$liveamount->Franchisee->name}}</td>
                    <td>{{$liveamount->Category->name}}</td>
                    <td>{{$liveamount->Product->product_name}}</td>
                    <td>{{$liveamount->rate}}/-</td>
                    <td>{{$liveamount->ratedate}}</td>
               
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('liveamount.edit',$liveamount->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                          </button></a>
                         <a href="{{route('liveamount.destroy',$liveamount->id)}}"><button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
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
  function product_type(value) {

    // alert(value);

  var product_id = value;
  // var product_id = document.getElementById("product_category").value;

    var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getProduct",
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




</script>
@endsection