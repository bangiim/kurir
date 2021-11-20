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
          <label class="col-sm-3 col-lg-2 col-form-label">Nama Kontor</label>
          <div class="col-sm-9 col-lg-10">
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
          <label class="col-sm-3 col-lg-2 col-form-label">Alamat</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="5"></textarea>
              
              @error('alamat')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Provinsi</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <select class="form-control select2bs4 @error('province_id') is-invalid @enderror" id="provinsi" name="province_id">
                <option value="" selected>-- Pilih Provinsi --</option>
                @foreach ($provinces as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
              </select>

              @error('province_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Kabupaten / Kota</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <select class="form-control select2bs4 @error('city_id') is-invalid @enderror" id="kota" name="city_id">
                <option value="">-- Pilih Kota --</option>
              </select>

              @error('city_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">No Telpon</label>
          <div class="col-sm-9 col-lg-10">
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
          <label class="col-sm-3 col-lg-2 col-form-label">Jam Operasional</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="text" class="form-control @error('jam_operasional') is-invalid @enderror" name="jam_operasional" placeholder="No Telepon">
              
              @error('jam_operasional')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <small><i>Contoh : 08.00 - 17.00</i></small>
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
        });
    </script>
    <!-- Ajax Request Laravolt Indonesia -->
    <script>
        function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function (data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>== Pilih Salah Satu ==</option>');

                    $.each(data, function (key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
        $(function () {
            $('#provinsi').on('change', function () {
                onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
            });
        });
    </script>
@endpush