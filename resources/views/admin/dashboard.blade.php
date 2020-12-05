@extends('layouts.master')

@section('main_content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <marquee class="text-info">Today Rate of Chicken: {{$today_rate}}/-</marquee>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <div class="row">
           @if(Auth::user()->role_id == 'SUPERADMIN')
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-warehouse"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Franchisees</span>
                <span class="info-box-number">
                  {{$total_franchisee}}
                </span>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          @endif

         @if(Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER')

           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-warehouse"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Today Sale</span>
                <span class="info-box-number">
                  {{$today_sale}}
                </span>
              </div>
            </div>
            <!-- /.info-box -->
          </div>


          @endif
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="far fa-money-bill-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. Of sales</span>
                <span class="info-box-number">{{$no_of_sales}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="far fa-check-square"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Live Stocks &nbsp; <i class="fas fa-hand-point-left blink bg-info" >New</i></span>
                <span class="info-box-number">{{$total_lived_stock}}(Kgs)</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-square"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dressed Stocks  &nbsp;<i class="fas fa-hand-point-left blink bg-info" >New</i></span>
                <span class="info-box-number">
               
                <!-- {{$total_dressed_stock}}(Kgs) -->
                {{$dres_stock}}(Kgs)
              </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
         <!--  <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-flag-checkered"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Reports</span>
                <span class="info-box-number">
                  10
                </span>
              </div>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Overall Sales</span>
                <span class="info-box-number">{{$total_sales}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Employees</span>
                <span class="info-box-number">{{$total_emp}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box --> 
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->


@endsection