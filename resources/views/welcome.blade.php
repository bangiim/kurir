@extends('layouts.master')

@section('content')
  <div class="card shadow-sm p-3 rounded">
    <section class="py-3 container">
      <div class="row">
        <div class="mb-2">
          <h1 class="fw-light">Lacak Lokasi</h1>
          <p class="lead text-muted">Cari tau posisi paket Anda saat ini.</p>
        </div>
        <form class="form" method="get" action="/lacak">
          <div class="input-group">
            <input class="form-control form-control-lg " type="search" placeholder="Masukan No Resi Paket" name="keyword">
            <div class="input-group-append">
              <button class="btn btn-dark btn-lg" type="submit">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>

  <div class="row text-center mt-5 mb-3">
    <div class="col-12 mx-auto">
      <h1 class="text-danger">Nikmati kemudahan dengan AppKurir Indonesia</h1>
      <p class="lead text-muted">Nikmati pengiriman barang tanpa ribet dengan layanan kurir terkemuka di Indonesia</p>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-4">
      <div class="row">
        <img src="{{asset('img/Frame-1.png')}}" width="250">
      </div>
      <div class="row text-center">
        <h4 class="card-title">Kirim Paket Fleksibel</h4>
        <p class="card-text">Pilih beragam opsi taruh/jemput paket, dan buat reservasi dengan mudah melalui dashboard kami</p>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <img src="{{asset('img/Frame-2.png')}}" width="250">
      </div>
      <div class="row text-center">
        <h4 class="card-title">Fitur COD Andalan</h4>
        <p class="card-text">Perlu kumpulkan pembayaran dari pelanggan? Nikmati fitur Bayar-di-Tempat, berlaku di semua jangkauan area</p>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <img src="{{asset('img/Frame-3.png')}}" width="250">
      </div>
      <div class="row text-center">
        <h4 class="card-title">Buat Pesanan Mudah</h4>
        <p class="card-text">Mudahnya kirim paket dan kelola pengiriman lewat dashboard canggih yang dipersonalisasi</p>
      </div>
    </div>
  </div>
@endsection