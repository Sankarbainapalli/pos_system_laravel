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
              <div class="card-header">
                <!-- <h3 class="card-title justify-content-center ">Live Amount (Main Shop)</h3> -->
                <form action="{{route('liveamount.store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <!-- <input type="text" name="chicken" class="form-control" placeholder="Chicken Rate" id="name1" required>  -->
                        <label>Product Category</label>
                            <select name="category_id" id="product_category"  class="form-control" style="width: 100%;" onchange="product_type()">
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
                    <div class="col-sm-3">
                      <div class="form-group">
                     
                        <label>Product Type</label>
                            <select name="product_id"  class="form-control" style="width: 100%;" >
                               @foreach($product_list as $product)
                                <option value="{{$product->id}}">{{$product->product_name}}</option>
                                
                                @endforeach
                            </select>

                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                      
                        <label>Rate</label>
                        <input type="text" name="rate" class="form-control" placeholder="Rate" id="name3" required>
                      </div> 
                    </div>
                    <div class="col-sm-3 mt-2">
                      <div class="form-group">
                         <label></label>
                        <button type="submit" class="btn btn-success w-100">Add</button>
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
  function product_type() {

  var x = document.getElementById("product_category").value;

    var token = "{{ csrf_token() }}";
    $.ajax({

            url: "getProduct",
            // url: "liveamount",
            method: "POST",
            data: {product_category:x, _token: token},
            success:function(data){
              if(data != 'SUCCESS'){
                alert('Something Wrong');
              }else{
                // alert("fdsdf");
                    location.reload();
                    // console.log("success");

              }
             }

            })
}

</script>
@endsection