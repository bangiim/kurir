<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    &nbsp;&nbsp;&nbsp;<i class="fas fa-box-open fa-fw"></i>&nbsp;
    <span class="brand-text font-weight-light">App Kurir</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          {{ Auth::user()->name }}
        </a>
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
    <nav class="mt-">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @if(Auth::user()->level_id=='1')
        {
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>Data Master</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kantor-cabang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kantor Cabang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengelola-cabang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengelola Cabang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kurir" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kurir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/account" class="nav-link">
              <i class=" nav-icon fas fa-user"></i>
              <p>Data Accounts</p>
            </a>
          </li>
        }

        @else
        {
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/laporan" class="nav-link">
              <i class="nav-icon far fa-file-excel"></i>
              <p>Laporan</p>
            </a>
          </li>
        }
        @endif        
      </ul>
    </nav>
  </div>
  <!-- /.sidebar -->
</aside>