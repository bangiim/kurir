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
      <li><a href="/company-profile" class="nav-link px-2 text-white">Company Profile</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Products & Service</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/courier-cargo">Courier and Cargo</a></li>
          <li><a class="dropdown-item" href="/logistics-supply">Logistics and Distribution</a></li>
        </ul>
      </li>
      <li><a href="/branches-agents" class="nav-link px-2 text-white">Branches & Agents</a></li>
      <li><a href="/technology" class="nav-link px-2 text-white">Technology</a></li>
      <li><a href="/contact-us" class="nav-link px-2 text-white">Contact Us</a></li>
    </ul>

    {{-- <div class="text-end">
      <a href="/contact" class="btn btn-outline-warning me-2"><i class="fas fa-sign-in"></i>&nbsp; Login</a>
    </div> --}}
  </div>
</div>