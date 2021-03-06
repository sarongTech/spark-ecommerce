<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('backend/lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SPARK E-COM ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a> 
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="/admin" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/order" class="nav-link {{ (request()->is('admin/order')) ? 'active' : '' }}">
                  <i class="fas fa-cash-register nav-icon"></i>
                  <p>Transaction Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Management Stock</p>
                </a>
              </li>

            <li class="nav-item has-treeview {{ (request()->is('admin/product')) ? 'active' : '' }} menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/product" class="nav-link {{ (request()->is('admin/product')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/category" class="nav-link {{ (request()->is('admin/category')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/user" class="nav-link {{ (request()->is('admin/user')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Users</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
          </li>
          <!--<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>