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
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Qty(Kgs)</th>
                    <th>Branch</th>
                    <th>Availability</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td> 
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Dressed</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Boneless</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Boneless</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Dressed</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Boneless</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Dressed</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Live</td>
                    <td>Chicken</td>
                    <td>400</td>
                    <td>50</td>
                    <td>Madhapur</td>
                    <td>Active</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Branch</th>
                    <th>Availability</th>
                    <th>Action</th>
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
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;" >
                                <option>Live</option>
                                <option>Dressed</option>
                                <option>Boneless</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Product Name</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;" >
                                <option>Chicken</option>
                                <option>Fish</option>
                                <option>Prawns</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter Price" id="price">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Qty(Kgs)</label>
                        <input type="text" class="form-control" placeholder="Enter Qty" id="qty">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Branch</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Branch" style="width: 100%;" id="branch">
                                <option>Madhapur</option>
                                <option>Secunderabad</option>
                                <option>Karim Nagar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Availability</label>
                            <select class="select2" multiple="multiple" data-placeholder="Availability" style="width: 100%;" id="prod">
                                <option>Active</option>
                                <option>Deactive</option>
                            </select>
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
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal add customer-->


    <!-- /.modal edit customer-->
    <div class="modal fade" id="edit-product">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form>
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;" id="edit-cat">
                                <option>Live</option>
                                <option>Dressed</option>
                                <option>Boneless</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Product Name</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;" id="edit-product">
                                <option>Chicken</option>
                                <option>Fish</option>
                                <option>Prawns</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter Price" id="edit-price">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Qty(Kgs)</label>
                        <input type="text" class="form-control" placeholder="Enter Qty" id="edit-qty">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Branch</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Branch" style="width: 100%;" id="edit-branch">
                                <option>Madhapur</option>
                                <option>Secunderabad</option>
                                <option>Karim Nagar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Availability</label>
                            <select class="select2" multiple="multiple" data-placeholder="Availability" style="width: 100%;" id="edi-avail">
                                <option>Active</option>
                                <option>Deactive</option>
                            </select>
                        </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@endsection