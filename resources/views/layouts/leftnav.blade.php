<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>
  <marquee style="color:red">Today Rate of Chicken: 250 || motton: 700 || Fish: 400</marquee>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
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
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
              John Pierce
              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
              Nora Silvester
              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
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
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li> -->
    <!-- User Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
      </a>
      <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
        <li><a href="#" class="dropdown-item">Profile </a></li>
        <li><a href="#" class="dropdown-item">Settings</a></li>
        <li class="dropdown-divider"></li>
        <!-- Level two dropdown-->
        <li><a href="./login.html" class="dropdown-item">Logout</a></li>
        <!-- End Level two -->
      </ul>
    </li>
  </ul>

</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light ml-3">Chicken Shop</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
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
        <!-- <li class="nav-item">
          <a href="{{route('role.index')}}" class="nav-link">
            <i class="nav-icon far fa-object-group"></i>
            <p>
              Roles
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              POS
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Add POS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>POS List</p>
              </a>
            </li>
          </ul>
        </li>
       <!--  <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-file-alt"></i>
            <p>
              Accounts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Add Account</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Accounts List</p>
              </a>
            </li>
          </ul>
        </li> -->
          <li class="nav-item">
            <a href="{{route('accountList')}}" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
                Accounts
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('liveamount.index')}}" class="nav-link">
              <i class="nav-icon fas fa-rupee-sign"></i>
              <p>
                Live Amount
              </p>
            </a>
          </li>




          <li class="nav-item">
            <a href="{{route('profitloss')}}" class="nav-link">
              <i class="nav-icon fas fa-percent"></i>
              <p>
                Profit & Loss
              </p>
            </a>
          </li>
          
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Stocks
            </p>
          </a>
           <ul class="nav nav-treeview">
            <li class="nav-item">
            <!--   <a href="{{route('stock.index')}}" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Lived Stock</p>
              </a> -->

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
          </ul>
        </li>
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
            <li class="nav-item">
              <a href="{{route('role.index')}}" class="nav-link">
                <i class="nav-icon far fa-object-group"></i>
                <p>
                  Roles
                </p>
              </a>
            </li>
          </ul>
        </li>
        
       
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
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Add Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Reports List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="./index2.html" class="nav-link">
            <i class="nav-icon fas fa-bell"></i>
            <p>
              Notifications
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Settings
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!--   <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Active/Deactive Employee</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Add City</p>
              </a>
            </li> -->

             <li class="nav-item">
            <a href="{{route('liveamount.index')}}" class="nav-link">
              <i class="nav-icon fas fa-rupee-sign"></i>
              <p>
                Live Amount
              </p>
            </a>
          </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            
            
          </ul>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
