<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('backend/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('backend/assets/dist/img/user3-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>
            Dashboard
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-bullhorn "></i>
            <p>
              Banner
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('banner.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  All Banner
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <a href="{{route('banner.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Add Banner
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
           
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fa-credit-card"></i>
            <p>
              Category
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-window-restore"></i>
            <p>
              Products
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-cart-plus"></i>
            <p>
              Cart
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-cart-plus"></i>
            <p>
              Order Management
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-cart-arrow-down"></i>
            <p>
              Post Category
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-tag"></i>
            <p>
              Post Tag
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-tag"></i>
            <p>
              Order Management
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-rocket"></i>
            <p>
              Post
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-users"></i>
            <p>
              Review Management
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Settings
            </p>
          </a>
        </li>




        <li class="nav-header">MULTI LEVEL EXAMPLE</li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Level 1
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Level 2
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>

              </ul>
            </li>

          </ul>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>