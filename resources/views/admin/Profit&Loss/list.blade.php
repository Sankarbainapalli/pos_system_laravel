@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profit & Loss</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Profit & Loss</li>
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
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Date</th>
                    <th>Franchisee Id</th>
                    <th>Live Stock Qty(Kg)</th>
                    <th>Live Stock Prc</th>
                    
                    <th>Dressed Stock Qty(KG)</th>
                    <th>Dressed Stock Prc</th>
                    <th>Point of Sale </th>
                    <th>Profit</th>
                    <th>Loss</th>
                    <th>After Wastage</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><?php echo date('d-m-Y');?></td>
                    <td>FRD001</td>
                    <td>{{$total_lived_stock}}</td>
                    <td>{{$exform_rate}}/{{$total_lived_stock*$exform_rate}}</td>

                    <td>{{$total_dressed_stock}}</td>
                     <td>{{$today_rate}}/{{$total_dressed_stock*$today_rate}}</td>
                     
                    <td>{{$pos}}</td>
                   
                    @if($pos=='0')
                    <td>0</td>
                    @elseif($pos>$total_lived_stock*$exform_rate)
                    <td>{{$pos-$total_lived_stock*$exform_rate}}</td>
                    @endif

                     @if($pos=='0')
                    <td>0</td>
                    @else
                    <td>{{$total_dressed_stock*$today_rate-$pos}}</td>
                    @endif
                    
                    @if($pos>$total_lived_stock*$exform_rate)
                   <td>{{($pos-$total_lived_stock*$exform_rate)*30/100}}</td>
                    @else
                    <td>0</td>
                    @endif
             
      
                    </tr>
              
                  </tbody>
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