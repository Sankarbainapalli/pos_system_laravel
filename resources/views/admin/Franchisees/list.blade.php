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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Customer Name</th>
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
                    <th>Customer Name</th>
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

@endsection