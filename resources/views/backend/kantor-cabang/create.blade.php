@extends('backend.layout.master')

@section('judul')
Form Create Kantor Cabang
@endsection
    
@section('content')
  <div class="card col-lg-10 col-md-12">
    <form action="/kantor-cabang" method="POST">
      <div class="card-body mt-3">
        @csrf
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama Kontor</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control @error('nama_kantor') is-invalid @enderror" name="nama_kantor" placeholder="Nama Kantor">

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
              <textarea name="alamat" class="form-control" rows="5"></textarea>
              
              @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Provinsi</label>
          <div class="col-sm-10">
            <div class="input-group">
              <select class="form-control select2bs4" id="province" name="kantorcabang_id">
                <option selected>-- Select a Provinsi --</option>
                @foreach ($provinces as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
              </select>

              @error('kantorcabang_id')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Kota</label>
          <div class="col-sm-10">
            <div class="input-group">
              <select class="form-control select2bs4" id="city" name="kantorcabang_id">
                <option value="">-- Select a Kota --</option>
              </select>

              @error('kantorcabang_id')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        {{-- <div class="form-group row">
          <label class="col-sm-2 col-form-label">Kota</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" placeholder="Kota">
              
              @error('kota')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div> --}}

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">No Telpon</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" placeholder="No Telepon">
              
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
              <input type="text" class="form-control @error('jam_operasional') is-invalid @enderror" name="jam_operasional" placeholder="No Telepon">
              
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

          //Laravolt Indonesia
          $('#province').on('change', function () {
            axios.post('{{ route('kantor-cabang.store') }}', {id: $(this).val()})
              .then(function (response) {
                  $('#city').empty();

                  $.each(response.data, function (id, name) {
                      $('#city').append(new Option(name, id))
                  })
              });
          });
        });
    </script>
@endpush