@extends('layouts.master')

@section('content')
<div class="card shadow-sm p-3 rounded">
    <section class="py-3 container">
      	<div class="row">
	        <div class="mb-2">
	          <h1 class="fw-light">Lacak Lokasi</h1>
	          <p class="lead text-muted">Cari tau posisi paket Anda saat ini.</p>
	        </div>
	        <table id="example" class="table table-bordered table-striped">
		        <thead>
		          <tr>
		            <th>No</th>
		            <th>No Resi</th>
		            <th>Layanan</th>
		            <th>Pengirim</th>
		            <th>Tujuan</th>
		            <th>Penerima</th>
		            <th>Ongkir</th>
		            <th>Status</th>
		            <th>Action</th>
		          </tr>
		        </thead>
		        <tbody>
		          	@forelse ($pengiriman as $key => $item)
		            <tr>
		              <td>{{ $key + 1 }}</td>
		              <td>{{ $item->no_resi }}</td>
		              <td>{{ $item->layanan }}</td>
		              <td>{{ $item->nama_pengirim }}</td>
		              <td>{{ $item->kantorcabang->nama_kantor }}</td>
		              <td>{{ $item->nama_penerima }}</td>
		              <td>Rp {{ $item->biaya }}</td>
		              <td>{{ $item->status}}</td>
		              <td>
		                <a href="/detailpaket/{{$item->id}}" class="btn btn-success btn-sm">Detail</a>
		              </td>
		            </tr>

		          	@empty
		            <tr>
		              <td colspan="7">Data Masih Kosong</td>
		            </tr>

		          	@endforelse
		        </tbody>
		    </table>
      	</div>
    </section>
  </div>
@endsection
