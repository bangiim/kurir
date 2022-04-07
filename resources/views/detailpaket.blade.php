@extends('layouts.master')

@section('content')
<div class="card shadow-sm p-3 rounded">
    <section class="py-3 container">
      	<div class="row">
	        <div class="mb-2">
	          <h1 class="fw-light">Lacak Lokasi</h1>
	          <p class="lead text-muted">Cari tau posisi paket Anda saat ini.</p>
	        </div>
	        <table class="table table-bordered table-striped">
		        <tbody>
		          <tr>
		            <th colspan="4" class="text-center"><h4><b>Informasi Pengiriman</b></h4></th>
		          </tr>
		          <tr>
		            <th colspan="2" class="text-center">Data Pengirim</th>
		            <th colspan="2" class="text-center">Data Penerima</th>
		          </tr>
		          <tr>  
		            <th style="width: 15%" class="text-center">Nama</th>
		            <td>{{$pengiriman->nama_pengirim}}</td>
		            <th style="width: 15%" class="text-center">Nama</th>
		            <td>{{$pengiriman->nama_penerima}}</td>
		          </tr>
		          <tr>  
		            <th style="width: 15%" class="text-center">No HP</th>
		            <td>{{$pengiriman->nohp_pengirim}}</td>
		            <th style="width: 15%" class="text-center">No HP</th>
		            <td>{{$pengiriman->nohp_penerima}}</td>
		          </tr>
		          <tr>  
		            <th style="width: 15%" class="text-center">Alamat</th>
		            <td>{{$pengiriman->alamat_pengirim}}</td>
		            <th style="width: 15%" class="text-center">Alamat</th>
		            <td>{{$pengiriman->alamat_penerima}}</td>
		          </tr>
		        </tbody>
		    </table>

		    <table class="table table-bordered table-striped mt-3">
		        <tbody>
		          <tr>  
		            <th style="width: 15%">Kantor Tujuan</th>
		            <td>{{$pengiriman->kantorcabang->nama_kantor}}</td>
		          </tr>
		          <tr>
		            <th style="width: 15%">Jenis Barang</th>
		            <td>{{$pengiriman->jenis_barang}}</td>
		          </tr>
		          <tr>  
		            <th style="width: 15%">Layanan</th>
		            <td>{{$pengiriman->layanan}}</td>
		          </tr>
		          <tr>
		            <th style="width: 15%">Berat</th>
		            <td>{{$pengiriman->berat}} Kg</td>
		          </tr>
		          <tr>  
		            <th style="width: 15%">Jarak</th>
		            <td>{{$pengiriman->jarak->jarak}}</td>
		          </tr>
		          <tr>
		            <th style="width: 15%">Biaya</th>
		            <td>Rp {{$pengiriman->biaya}}</td>
		          </tr>
		          <tr>
		            <th style="width: 15%">Status</th>
		            <td>Paket telah di {{$pengiriman->status}} (manifested) di {{$pengiriman->kantorcabang->nama_kantor}}</td>
		          </tr>
		        </tbody>
		    </table>
      	</div>
      	<a href="/" class="btn btn-primary mt-2">Back</a>
    </section>
  </div>
@endsection
