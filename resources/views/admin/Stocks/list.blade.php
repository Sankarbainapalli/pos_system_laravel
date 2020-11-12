@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Chicken Stocks List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Stocks</li>
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
               <!--  <h3 class="card-title justify-content-center ">Stocks List</h3>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add-stock">Add Stock</button> -->
                <form action="" method="POST">
                  <div class="row col-md-12" >
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                     <div class="row">
                   
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Total weight(kg)</label>
                        <input type="text" name="qty" id="qty" class="form-control" placeholder="weiging machine" required onkeyup="sum()" >
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Rate</label>

                        @foreach($liveamount_list as $liveamount)
                          <input type="text" name="rate" id="rate" class="form-control" placeholder="weiging machine" required onkeyup="sum()" value="{{$liveamount->chicken}}" readonly="">
                        @endforeach


                        <!-- <select class="form-control" name="rate" id="rate" disabled="">
                          @foreach($liveamount_list as $liveamount)
                          <option >{{$liveamount->chicken}}</option>
                          @endforeach
                        </select> -->


                      </div>
                    </div>
                  </div>
                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Amount" required id="total" onkeyup="sum()">
                      </div>
                    </div>

                  </div>
                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Add</button>
                      </div>
                    </div>

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
                    <th>OverAll Stocks</th>
                    <th>Live Stocks</th>
                    <th>Dressed Stocks</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Branch 1</td>
                    <td>56</td>
                    <td>19</td>
                    <td>400</td>
                    <td>50000</td>
                    <td> 
                      <div class="btn-group">
                          <a href=""><button type="button" class="btn btn-primary">
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
                  <tr>
                    <th colspan="4">Total</th>
                    <th>54000</th>
                    <th></th>
                  </tr>
                  <tr>
                    <th>OverAll Stocks</th>
                    <th>Live Stocks</th>
                    <th>Dressed Stocks</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
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
    <!-- <div class="modal fade" id="add-stock">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Stock</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>OverAll Stocks</label>
                        <input type="text" class="form-control" placeholder="Enter OverAll Stocks" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Live Stocks</label>
                        <input type="text" class="form-control" placeholder="Enter Live Stocks" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Dressed Stocks</label>
                        <input type="text" class="form-control" placeholder="Enter Dressed Stocks" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" placeholder="Enter Rate" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Amount" required>
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
        </div>
      </div> -->
      <!-- /.modal add customer-->

@endsection

@section('script')
<script type="text/javascript">

  function sum() {

             var qty = parseFloat($('#qty').val()) ;
            var rate = parseFloat($('#rate').val()) ;
            var total=qty*rate;

             $('#total').val(total);
        }
</script>

@endsection