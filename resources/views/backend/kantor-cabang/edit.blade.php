@extends('backend.layout.master')

@section('judul')
Form Edit Kantor Cabang
@endsection
    
@section('content')
  <div class="card col-10">
    <form action="/kantor-cabang/{{$kantorcabang->id}}" method="POST">
      <div class="card-body mt-3">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama Kontor</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control @error('nama_kantor') is-invalid @enderror" name="nama_kantor" placeholder="Nama Kantor" value="{{ $kantorcabang->nama_kantor }}">

              @error('nama_kantor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <div class="input-group">
              <textarea name="alamat" class="form-control" rows="5">{{ $kantorcabang->alamat }}</textarea>
              
              @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Kota</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" placeholder="Kota" value="{{ $kantorcabang->kota }}">
              
              @error('kota')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">No Telpon</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" placeholder="No Telepon" value="{{ $kantorcabang->no_telp }}">
              
              @error('no_telp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Jam Operasional</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control @error('jam_operasional') is-invalid @enderror" name="jam_operasional" placeholder="No Telepon" value="{{ $kantorcabang->jam_operasional }}">
              
              @error('jam_operasional')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/kantor-cabang" class="btn btn-danger float-right">Cancel</a>
      </div>
    </form>
  </div>
@endsection