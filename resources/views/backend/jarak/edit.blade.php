@extends('backend.layout.master')

@section('judul')
Form Edit Jarak
@endsection
    
@section('content')
  <div class="card col-lg-8 col-sm-120">
    <form action="/jarak/{{$jarak->id}}" method="POST">
      <div class="card-body mt-3">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Jarak</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="text" class="form-control @error('jarak') is-invalid @enderror" name="jarak" placeholder="Input jarak" value="{{ $jarak->jarak }}">

              @error('jarak')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Harga</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" placeholder="Input Harga" value="{{ $jarak->harga }}">
              
              @error('harga')
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
        <a href="/jarak" class="btn btn-danger float-right">Cancel</a>
      </div>
    </form>
  </div>
@endsection