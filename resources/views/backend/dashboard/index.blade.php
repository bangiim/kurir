@extends('backend.layout.master')

@section('judul')
    Welcome to Dashboard
@endsection

@section('content')
  
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><i class="nav-icon fas fa-city"></i>&nbsp; {{ $kantorCabang }}</h3>

          <p>Kantor Cabang</p>
        </div>
        <div class="icon">
          <i class="nav-icon fas fa-city"></i>
        </div>
        <a href="/kantor-cabang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3><i class="nav-icon fas fa-truck-loading"></i>&nbsp; {{ $pengiriman }}</h3>

          <p>Pengiriman</p>
        </div>
        <div class="icon">
          <i class="nav-icon fas fa-truck-loading"></i>
        </div>
        <a href="/pengiriman" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3><i class="nav-icon fas fa-users"></i>&nbsp; {{ $kurir }}</h3></h3>

          <p>Kurir</p>
        </div>
        <div class="icon">
          <i class="nav-icon fas fa-users"></i>
        </div>
        <a href="/kurir" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row (main row) -->
@endsection

@push('style')
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush


            