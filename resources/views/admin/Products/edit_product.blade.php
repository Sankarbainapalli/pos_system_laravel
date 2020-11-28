@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Products</li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Product</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                       @csrf
                    @method('patch')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id"  style="width: 100%;" class="form-control" >
                      <!-- class="select2" multiple="multiple" data-placeholder="Select a Category" -->
                      @foreach($category_list as $category)

                      <option value="{{$category->id}}" {{ ( $category->id == $product->category_id) ? 'selected' : '' }}>{{$category->name}}</option>

                      @endforeach
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="prod">Product Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" id="Prod" required value="{{$product->product_name}}">
                </div>


                <div class="form-group">
                    <label for="prod">Product Image</label>
                    <input type="file"  name="product_img" class="form-control" id="Prod" >
                </div>

                <!-- /.form-group -->
                <!-- <div class="form-group">
                    <label>Qty(Kgs)</label>
                    <input type="text" name="qty" class="form-control" placeholder="Enter Qty" id="qty" required value="{{$product->qty}}">
                </div> -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <!-- <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="amount" class="form-control" placeholder="Enter Price" id="price" required value="{{$product->amount}}">
                   </div> -->
                  <!-- /.form-group -->
                  <!-- <div class="form-group">
                    <label>Branch</label>
                    <select name="branch_id" class="form-control" style="width: 100%;" id="branch">
                       @foreach($branch_list as $branch)

                      <option value="{{$branch->id}}" {{ ( $branch->id == $product->branch_id) ? 'selected' : '' }}>{{$branch->name}}</option>

                      @endforeach

                    </select>
                  </div> -->
<!-- 
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" style="width: 100%;" id="prod">
                      @if($product->status=='1')
                        <option value="1" selected="selected">Active</option>
                        <option value="0">Deactive</option>
                        @else
                       <option value="1" >Active</option>
                        <option value="0" selected="selected">Deactive</option>
                        @endif
                    </select>
                  </div> -->
                  <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
            <!-- /.button -->
          </div>
          <!-- /.card-body -->
        </div>
      </form>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    

@endsection