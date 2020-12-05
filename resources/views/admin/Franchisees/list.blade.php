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
            <x-alert />

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
                    <th>S.no</th>
                    <th>Franchisee Id.</th>
                    <th>Franchisee Name</th>
                    <th>Mobile No.</th>
                    <th>Adhaar/Pan No.</th>
                    <th>Bank A/C No.</th>
                    <th>Branch</th>
                    <th>Date of Franch. Starts</th>
                    <th>Remarks/Note</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($franchisee_list as $franchisee)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>FRD00{{$franchisee->id}}</td>
                    <td>{{$franchisee->name}}</td>
                    <td>{{$franchisee->mobile}}</td>
                    <td>{{$franchisee->addhar_no}}</td>
                    <td>{{$franchisee->account_no}}</td>
                    <td>{{$franchisee->Branch->location}}</td>
                    <td>{{$franchisee->start_date}}</td>
                    <td>{{$franchisee->remarks}}</td>
                    <td> 
                      <div class="btn-group">
                          <a href="{{route('franchisee.edit',$franchisee->id)}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-product">
                            <i class="far fa-edit"></i>
                          </button></a>
                         <a href="{{route('franchisee.destroy', $franchisee->id)}}"> <button type="button" class="btn btn-danger" onclick="confirm('Do You Want To Delete?')">
                            <i class="far fa-trash-alt"></i>
                          </button></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
         
                  </tbody>
                 <!--  <tfoot>
                    <th>Franchisee Name</th>
                    <th>Mobile No.</th>
                    <th>Adhaar/Pan No.</th>
                    <th>Bank A/C No.</th>
                    <th>District/City/Town</th>
                    <th>ID No.</th>
                    <th>Date of Franch. Starts</th>
                    <th>Remarks/Note</th>
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
                <form action="{{route('franchisee.store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Franchisee Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Franchisee Name" id="Fname" required>
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" name="mobile" maxlength="10" class="form-control" placeholder="Enter Mobile No." id="mobile" required>
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Adhaar Card/ Pan Card No.</label>
                        <input type="text" name="addhar_no" class="form-control" placeholder="Enter Adhaar Card/ Pan Card No." id="adhr_pan" required maxlength="12">
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Branch name</label>
                        <select class="form-control" name="city">
                          @foreach($branch_list as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Store Id(Auto-Generated)</label>  <!-- We have to auto-generate IDs -->
                        <input type="text" name="ref_id" class="form-control" placeholder="Enter Id No." id="uni_id" required value="FRN00{{$fran_code+1}}">
          
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <label>Date Of Franchisee Starts</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="date" name="start_date" class="form-control" />
                          <!-- datetimepicker-input" data-target="#reservationdate" id="dte" -->
                         <!--  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div> -->
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label>Bank Details</label>
                          <!-- <input type="text" name="account_no" class="form-control" placeholder="Enter Bank A/c No." id="bank_acc" required maxlength="16"> -->
                          <textarea class="form-control" name="account_no" placeholder=""></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address"  placeholder="Enter address" id="address"></textarea>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Remarks/Note</label>
                        <textarea class="form-control" name="remarks"  placeholder="Enter Remarks/Note" id="remarks"></textarea>
                      </div>
                    </div>

                   <!--   <div class="col-sm-6">
                      <div class="form-group">
                        <label>UserName</label>
                       <input type="text" name="user_name" class="form-control">
                      </div>
                    </div>

                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div> -->
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