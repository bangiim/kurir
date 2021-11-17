<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <i class="fas fa-box-open fa-fw"></i>&nbsp;
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

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      @auth
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/anggota" class="nav-link">
            <i class="nav-icon fas fa-boxes"></i>
            <p>Data Paket</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/laporan" class="nav-link">
            <i class="nav-icon far fa-file-excel"></i>
            <p>Laporan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>Data Akun</p>
          </a>
        </li>
      </ul>
      @endauth
    </nav>
  </div>
  <!-- /.sidebar -->
</aside>