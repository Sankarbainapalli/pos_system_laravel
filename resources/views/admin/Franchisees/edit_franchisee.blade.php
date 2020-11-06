@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Franchisee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Franchisees</li>
              <li class="breadcrumb-item active">Edit Franchisee</li>
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
            <h3 class="card-title">Edit Franchisee</h3>

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
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Franchisee Name</label>
                    <input type="text" class="form-control" placeholder="Enter Franchisee Name" id="Fname">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Adhaar Card/ Pan Card No.</label>
                    <input type="text" class="form-control" placeholder="Enter Adhaar Card/ Pan Card No." id="adhr_pan">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                      <label>Bank A/c No.</label>
                      <input type="text" class="form-control" placeholder="Enter Bank A/c No." id="bank_acc">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div class="form-group">
                    <label>District/City/Town</label>
                    <input type="text" class="form-control" placeholder="Enter District/City/Town" id="city_dis_town">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Unique ID No.(Auto-Generated)</label>  <!-- We have to auto-generate IDs -->
                    <input type="text" class="form-control" placeholder="Enter Id No." id="uni_id">
                  </div>
                  <!-- /.form-group -->
                  <!-- Date -->
                  <div class="form-group">
                    <label>Date Of Franchisee Starts</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                  </div>
                  <!-- /.form group --> 
                  <div class="form-group">
                    <label>Remarks/Note</label>
                    <textarea class="form-control" rows="1" placeholder="Enter Remarks/Note" id="remarks"></textarea>
                  </div>
                <!-- /.form-group --> 
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <button type="button" class="btn btn-block btn-primary mt-3">Save Changes</button>
            <!-- /.button -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    

@endsection