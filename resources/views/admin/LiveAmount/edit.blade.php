@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Live Amount</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Update Live amount</a></li>
              <li class="breadcrumb-item active">Live Amount</li>
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
                <!-- <h3 class="card-title justify-content-center ">Live Amount (Main Shop)</h3> -->
                   <form action="{{route('liveamount.update', $liveamount->id)}}" method="POST">
                       @csrf
                    @method('patch')
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                       <label>Franchisee name</label>
                        <select class="form-control" name="branch_id">
                          @foreach($franchisee_list as $franchisee)
                            @if($liveamount->branch_id == $franchisee->id)
                            <option value="{{$franchisee->id}}" {{ ( $liveamount->branch_id == $franchisee->id) ? 'selected' : '' }}>FRN00{{$liveamount->branch_id}}({{$liveamount->Franchisee->name}})</option>
                            @else
                              <option value="{{$franchisee->id}}">FRN00{{$franchisee->id}}({{$franchisee->name}})</option>
                            @endif
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
                                @if($liveamount->category_id == $category->id)
                                <option value="{{$liveamount->category_id}}" {{ ( $liveamount->category_id == $category->id) ? 'selected' : '' }}>{{$liveamount->Category->name}}</option >
                                @else
                                   <option value="{{$category->id}}" >{{$category->name}}</option >
                                @endif
    
                                @endforeach
                            </select>
                        </div>
                      </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                     
                        <label>Product Type</label>
                            <select name="product_id"  class="form-control" style="width: 100%;" id="product_id">
                               @foreach($product_list as $product)
                                 @if($liveamount->product_id == $product->id)
                                <option value="{{$liveamount->product_id}}" {{ ( $liveamount->product_id == $product->id) ? 'selected' : '' }}>{{$liveamount->Product->product_name}}</option>
                                @else
                                   <option value="{{$product->id}}" >{{$product->product_name}}</option >
                                @endif
                                
                                @endforeach
                            </select>

                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                      
                        <label>Rate</label>
                        <input type="text" name="rate" class="form-control" placeholder="Rate" id="name3"  value="{{$liveamount->rate}}">
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




</script>
@endsection