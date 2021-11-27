@extends('backend.layout.master')

@section('judul')
Detail Data Pengiriman : <b>{{ $pengiriman->no_resi }}</b>
@endsection

@section('content')
  <div class="card">
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th colspan="4" class="text-center"><h4>Informasi Pengiriman</h4></th>
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

      <table class="table table-bordered table-striped mt-5">
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
  </div>

  <a href="/pengiriman" class="btn btn-info mt-4">Back</a>
  <a href="/pengiriman/{{$pengiriman->id}}/edit" class="btn btn-warning mt-4">Edit</a>
@endsection