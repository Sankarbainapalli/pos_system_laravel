@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Franchisees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Franchisees</li>
              <li class="breadcrumb-item active">Franchisees List</li>
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
                <h3 class="card-title justify-content-center ">Franchisees List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-franchisee">Add Franchisee</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Franchisee Name</th>
                    <th>Mobile No.</th>
                    <th>Adhaar/Pan No.</th>
                    <th>Bank A/C No.</th>
                    <th>District/City/Town</th>
                    <th>ID No.</th>
                    <th>Date of Franch. Starts</th>
                    <th>Remarks/Note</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                          <button type="button" class="btn btn-primary">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Vishal</td>
                    <td>123456789</td>
                    <td>134902344</td>
                    <td>123492121323</td>
                    <td>Madhapur</td>
                    <td>100021</td>
                    <td>11/17/2020</td>
                    <td>This is a small remarks area notifying contents</td>
                    <td>
                      <div class="btn-group">
                          <a href="{{route('edit_franchisee')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
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
                    <th>Franchisee Name</th>
                    <th>Mobile No.</th>
                    <th>Adhaar/Pan No.</th>
                    <th>Bank A/C No.</th>
                    <th>District/City/Town</th>
                    <th>ID No.</th>
                    <th>Date of Franch. Starts</th>
                    <th>Remarks/Note</th>
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
    <div class="modal fade" id="add-franchisee">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Franchisee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Franchisee Name</label>
                        <input type="text" class="form-control" placeholder="Enter Franchisee Name" id="Fname" required>
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required>
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Adhaar Card/ Pan Card No.</label>
                        <input type="text" class="form-control" placeholder="Enter Adhaar Card/ Pan Card No." id="adhr_pan" required>
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>District/City/Town</label>
                        <input type="text" class="form-control" placeholder="Enter District/City/Town" id="city_dis_town">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Unique ID No.(Auto-Generated)</label>  <!-- We have to auto-generate IDs -->
                        <input type="text" class="form-control" placeholder="Enter Id No." id="uni_id" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <label>Date Of Franchisee Starts</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="dte"/>
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label>Bank A/c No.</label>
                          <input type="text" class="form-control" placeholder="Enter Bank A/c No." id="bank_acc" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Remarks/Note</label>
                        <textarea class="form-control" rows="1" placeholder="Enter Remarks/Note" id="remarks"></textarea>
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

@endsection