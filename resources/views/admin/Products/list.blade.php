@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                <h3 class="card-title justify-content-center ">Products List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-product">Add Product</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Qty(Kgs)</th>
                    <th>Price</th>
                    <th>Branch</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     @foreach($product_list as $product)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->Category->name}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->amount}}</td>
                    <td>{{$product->Branch->name}}</td>
                    <td>
                      @if($product->status=='1')
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">Deactive</span>
                      @endif
                    </td>
                    
                    <td> 
                      <div class="btn-group">
                      <a href="{{route('product.edit',$product->id)}}"><button type="button" class="btn btn-primary" >
                            <i class="far fa-edit"></i>
                          </button></a>

                        <a href="{{route('product.destroy',$product->id)}}"><button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button>
                          </a>  
                      </div>
                    </td>
                  </tr>
                  @endforeach
                
                  </tbody>
                  <!-- <tfoot>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Qty(Kgs)</th>
                    <th>Price</th>
                    <th>Branch</th>
                    <th>Status</th>
                    <th>Action</th>
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
    <div class="modal fade" id="add-product">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form action="{{route('product.store')}}" method="POST">
              @csrf
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="select2" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;" >
                               @foreach($category_list as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prod">Product Name</label>
                            <input type="text"  name="product_name" class="form-control" placeholder="Enter Product Name" id="Prod" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Qty(Kgs)</label>
                        <input type="text" name="qty" class="form-control" placeholder="Enter Qty" id="qty" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="amount" class="form-control" placeholder="Enter Price" id="price" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Branch</label>
                            <select name="branch_id" class="select2" multiple="multiple" data-placeholder="Select a Branch" style="width: 100%;" id="branch">
                                 @foreach($branch_list as $branch)
                                <option value="{{$branch->id}}">{{$branch->name}}</option>
                                
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="select2" multiple="multiple" data-placeholder="Availability" style="width: 100%;" id="prod">
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>
                  </div>
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->

@endsection