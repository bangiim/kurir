@extends('backend.layout.master')

@section('judul')
Form Edit Kurir
@endsection
    
@section('content')
  <div class="card col-8">
    <form action="/kurir/{{$kurir->id}}" method="POST">
      <div class="card-body mt-3">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Lengkap" value="{{ $kurir->nama }}">

              @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">No HP</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" placeholder="No Handphone" value="{{ $kurir->no_hp }}">
              
              @error('no_hp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $kurir->email }}">
              
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Kantor Cabang</label>
          <div class="col-sm-10">
            <div class="input-group">
              <select class="form-control select2bs4" name="kantorcabang_id">
                <option>-- Select a Kantor Cabang --</option>
                @foreach ($kantorcabang as $item)
                  @if ($item->id === $kurir->kantorcabang_id)
                      <option value="{{ $item->id }}" selected>{{ $item->nama_kantor }}</option>
                  @else
                      <option value="{{ $item->id }}">{{ $item->nama_kantor }}</option>
                  @endif
                @endforeach
              </select>

              @error('kantorcabang_id')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/kurir" class="btn btn-danger float-right">Cancel</a>
      </div>
    </form>
  </div>
@endsection

@push('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush

@push('script')
    <!-- Select2 -->
    <script src="{{asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            });
        });
    </script>
@endpush