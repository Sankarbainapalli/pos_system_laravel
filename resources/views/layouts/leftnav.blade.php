<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- SEARCH FORM -->
  <!-- <form class="form-inline ml-3"> -->
    <div class="input-group input-group-sm">
      <!-- <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"> -->
     <!--  <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
        </button>
            </div> -->
             <i class="fas fa-spinner fa-pulse"></i><badge style="text-decoration-color: blue;">  {{Auth()->user()->role_id}}

    </div>
  <!-- </form> -->

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <!-- <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
      
          <div class="media">
            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
              Brad Diesel
              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
   
        </a>
   
      </div>
    </li> -->
    <!-- Notifications Dropdown Menu -->
   <!--  <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li> -->
    <!-- User Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"><?php echo ucwords(Auth()->user()->name);?></i><span></span>
      </a>
      <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
        <!-- <li><a href="#" class="dropdown-item">Profile </a></li> -->
        <li><a href="{{route('setting.index')}}" class="dropdown-item">Settings</a></li>
        <li class="dropdown-divider"></li>
        <!-- Level two dropdown-->
        <li>
          <!-- <a href="./login.html" class="dropdown-item">Logout</a> -->
           <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </li>
        <!-- End Level two -->
      </ul>
    </li>
  </ul>

</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('home')}}" class="brand-link">
    <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light ml-3">Chicken Shop</span></br>
                
</badge>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->

        @if(Auth::user()->role_id == 'SUPERADMIN' || Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER')
        <li class="nav-item">
          <a href="{{route('home.index')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
       

    

         <li class="nav-item">
          <a href="{{route('customer.index')}}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Customers
            </p>
          </a>
        </li>

         @endif

        
         @if(Auth::user()->role_id == 'SUPERADMIN')  
         <li class="nav-item">
          <a href="{{route('purchaseorder.index')}}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Purchase Order
            </p>
          </a>
        </li>
        @endif

        @if(Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER')  
         <li class="nav-item">
          <a href="{{route('purchaseorder.index')}}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Request Order
            </p>
          </a>
        </li>
        @endif


         @if(Auth::user()->role_id == 'SUPERADMIN' || Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER' ) 

        <li class="nav-item">
          <a href="{{route('pos.index')}}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              POS
            </p>
          </a>
        </li>
        @endif


      @if(Auth::user()->role_id == 'SUPERADMIN')
            <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>

            <p>
              Accounts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">

          
                  <li class="nav-item">
              <a href="{{route('expenses.index')}}" class="nav-link">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>
                  Expenses
                </p>
              </a>
            </li>

             <li class="nav-item">
              <a href="{{route('income.index')}}" class="nav-link">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>
                Income
                </p>
              </a>
            </li>

          
          </ul>
        </li>
        @endif


         @if(Auth::user()->role_id == 'SUPERADMIN' || Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER')
          <li class="nav-item">
            <a href="{{route('liveamount.index')}}" class="nav-link">
              <i class="nav-icon fas fa-rupee-sign"></i>
              <p>
                Today Rate
              </p>
            </a>
          </li>
          @endif


          @if(Auth::user()->role_id == 'SUPERADMIN')

           <li class="nav-item">
            <a href="{{route('exformrate.index')}}" class="nav-link">
              <i class="nav-icon fas fa-rupee-sign"></i>
              <p>
                Ex-Form Rate
              </p>
            </a>
          </li>
          @endif



           @if(Auth::user()->role_id == 'SUPERADMIN')

          <li class="nav-item">
            <a href="{{route('profitloss')}}" class="nav-link">
              <i class="nav-icon fas fa-percent"></i>
              <p>
                Profit & Loss
              </p>
            </a>
          </li>

           @endif

           @if(Auth::user()->role_id == 'SUPERADMIN' || Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER')
          
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>

            <p>
              Stocks
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">

           <!--  <li class="nav-item">
              <a href="{{route('stock.index')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Stocks</p>
              </a>
            </li> -->

            <li class="nav-item">
               <a href="{{route('stock.lived_stock')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Lived Stock</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('stock.dressed_stock')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Dressed Stock</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{route('stock.other_stock')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Other Stock</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('stock.total_stock_list')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Total Stock</p>
              </a>
            </li>
            
          </ul>
        </li>

        @endif

        <!--
        <li class="nav-item">
          <a href="{{route('category.index')}}" class="nav-link">
            <i class="nav-icon fas fa-list-ol"></i>
            <p>
              Categories
            </p>
          </a>
        </li>
        -->

           

            
           @if(Auth::user()->role_id == 'SUPERADMIN')

            <li class="nav-item">
              <a href="{{route('branch.index')}}" class="nav-link">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>
                  Branches
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{route('franchisee.index')}}" class="nav-link">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>
                  Franchisees
                </p>
              </a>
            </li>

        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon far fa-file-alt"></i>
            <p>
              Product
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('product.index')}}" class="nav-link">
                <i class="nav-icon fas fa-list-ol"></i>
                <p>List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link">
                <i class="nav-icon fas fa-list-ol"></i>
                <p>Category</p>
              </a>
            </li>
          </ul>
        </li>
        @endif

         @if(Auth::user()->role_id == 'SUPERADMIN' || Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER')
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-file-alt"></i>
            <p>
              Employees
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('employee.index')}}" class="nav-link">
                <i class="nav-icon fas fa-list-ol"></i>
                <p>List</p>
              </a>
            </li>
            @if(Auth::user()->role_id == 'SUPERADMIN')
            <li class="nav-item">
              <a href="{{route('role.index')}}" class="nav-link">
                <i class="nav-icon far fa-object-group"></i>
                <p>
                  Roles
                </p>
              </a>
            </li>
            @endif
          </ul>
        </li>
        @endif
        
        @if(Auth::user()->role_id == 'SUPERADMIN' || Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER')
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-flag-checkered"></i>
            <p>
              Reports
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{route('live_stock_report')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Live Stock Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dressed_stock_report')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Dressed Stock Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('sales_report')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Sales Reports</p>
              </a>
            </li>
          </ul>
        </li>
        @endif
       
         @if(Auth::user()->role_id == 'SUPERADMIN' || Auth::user()->role_id == 'FRANCHISEEOWNER' || Auth::user()->role_id == 'STOREMANAGER')
        <li class="nav-item">
          <a href="{{route('setting.index')}}" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Settings
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
           
          <!--   <li class="nav-item">
              <a href="{{route('setting.index')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Systemsetting</p>
              </a>
            </li> -->

             <li class="nav-item">
              <a href="{{route('paymentmethod.index')}}" class="nav-link">
                <i class="far ffa-credit-card nav-icon"></i>
                <p>Payment Method</p>
              </a>
            </li>

           <!-- <li class="nav-item">
          <a href="./index2.html" class="nav-link">
            <i class="nav-icon fas fa-bell"></i>
            <p>
              Notifications
            </p>
          </a>
        </li>
         -->
          <!--   <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Profile</p>
              </a>
            </li> -->


          </ul>
        </li>
        @endif
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
