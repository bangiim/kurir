@extends('backend.layout.master')

@section('judul')
Detail Kantor Cabang
@endsection

@section('content')
  <div class="card">
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th style="width: 20%">#</th>
            <td>{{$kantorcabang->id}}</td>
          </tr>
          <tr>  
            <th style="width: 20%">Nama Kantor Cabang</th>
            <td>{{$kantorcabang->nama_kantor}}</td>
          </tr>
          <tr>  
            <th style="width: 20%">Provinsi</th>
            <td>
              @foreach ($provinces as $itemProvinsi)
                @if ($itemProvinsi->id === $kantorcabang->province_id)
                    {{ $itemProvinsi->name }}
                @endif
              @endforeach
            </td>
          </tr>
          <tr>  
            <th style="width: 20%">Kabupaten / Kota</th>
            <td>
              @foreach ($cities as $itemKota)
                @if ($itemKota->id === $kantorcabang->city_id)
                    {{ $itemKota->name }}
                @endif
              @endforeach
            </td>
          </tr>
          <tr>
            <th style="width: 20%">Alamat</th>
            <td>{{$kantorcabang->alamat}}</td>
          </tr>
          <tr>
            <th style="width: 20%">No. Telepon</th>
            <td>{{$kantorcabang->no_telp}}</td>
          </tr>
          <tr>
            <th style="width: 20%">Jam Operasional</th>
            <td>{{$kantorcabang->jam_operasional}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <a href="/kantor-cabang" class="btn btn-info">Back</a>
      <a href="/kantor-cabang/{{$kantorcabang->id}}/edit" class="btn btn-warning">Edit</a>
    </div>
  </div>
@endsection