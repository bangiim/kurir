<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <title>App Kurir</title>
  </head>
  <body>
    <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center text-white text-decoration-none col-lg-auto me-lg-auto">
            <img src="{{asset('img/courier.png')}}" width="40" height="40" class="bi me-2">
            <h4>App<b>Kurir</b></h4>
          </a>

          {{-- <form class="col-12 col-lg-auto me-lg-auto mb-2 mb-lg-0 me-lg-3">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form> --}}

          <ul class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <li><a href="#" class="nav-link px-2 text-white">Cek Resi</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Cek Ongkir</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Service</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
            <li><a href="#" class="nav-link px-2 text-white">About Us</a></li>
          </ul>

          <div class="text-end">
            <a href="/contact" class="btn btn-outline-warning me-2"><i class="fas fa-phone-alt"></i>&nbsp; Call Center : 021-5020-0050</a>
          </div>
        </div>
      </div>
    </header>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.jne.co.id/contents/slider-387.jpg" width="100%" height="100%">

          {{-- <div class="container">
            <div class="carousel-caption text-start text-black">
              <h1>Example headline.</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div> --}}
        </div>
        <div class="carousel-item">
          <img src="https://www.jne.co.id/contents/slider-437.png" width="100%" height="100%">

          {{-- <div class="container">
            <div class="carousel-caption text-start">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div> --}}
        </div>
        <div class="carousel-item">
          <img src="https://www.jne.co.id/contents/slider-453.jpg" width="100%" height="100%">

          {{-- <div class="container">
            <div class="carousel-caption text-start">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div> --}}
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container mt-4 mb-5">
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
    </div>

    <div class="bg-dark text-white">
      <div class="container mt-5">
        <footer class="py-5">
          <div class="row">
            <div class="col-3">
              <h5>KANTOR PUSAT</h5>
              <p>
                Jl. Tomang Raya No. 11<br>
                Jakarta Barat 11440<br>
                Indonesia<br>
                <br>
                Contact center. (62-21) 2927 8888<br>
                Office. (62-21) 566 5262<br>
                Fax. (62-21) 567 1413<br>
                Email. customercare@jne.co.id
              </p>
            </div>

            <div class="col-3">
              <h5>INFO KONTAK</h5>  
              <ul class="nav flex-column">
                <li class="nav-item mb-2">021-5020-0050</li>
                <li class="nav-item mb-2">@sicepat</li>
                <li class="nav-item mb-2">0812 9966 6088</a></li>
                <li class="nav-item mb-2">Support: customer.care@sicepat.com</li>
              </ul>
            </div>

            <div class="col-3">
              <h5>BANTUAN</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">Sumber pengirim</li>
                <li class="nav-item mb-2">Hubungi Kami</li>
                <li class="nav-item mb-2">Faq</li>
              </ul>
            </div>

            <div class="col-3">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of whats new and exciting from us.</p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>

          <div class="d-flex justify-content-center border-top mt-3">
            <p class="mt-3">&copy; 2021 Company, Inc. All rights reserved.</p>
          </div>
        </footer>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>