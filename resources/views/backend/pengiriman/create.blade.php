@extends('backend.layout.master')

@section('judul')
Form Create Pengiriman
@endsection
    
@section('content')
  <div class="card col-lg-8 col-sm-12">
    <form action="/pengiriman" method="POST">
      <div class="card-body mt-3">
        @csrf
        <h4>Informasi Pengirim :</h4>
        <hr>
        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Nama</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="text" class="form-control @error('nama_pengirim') is-invalid @enderror" name="nama_pengirim" placeholder="Nama Pengirim">

              @error('nama_pengirim')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">No HP</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="number" class="form-control @error('nohp_pengirim') is-invalid @enderror" name="nohp_pengirim" placeholder="No Handphone">
              
              @error('nohp_pengirim')
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
              <textarea name="alamat_pengirim" class="form-control @error('alamat_pengirim') is-invalid @enderror" rows="5"></textarea>
              
              @error('alamat_pengirim')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <h4 class="mt-4">Informasi Penerima :</h4>
        <hr>
        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Nama</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="text" class="form-control @error('nama_penerima') is-invalid @enderror" name="nama_penerima" placeholder="Nama Penerima">

              @error('nama_penerima')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">No HP</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="number" class="form-control @error('nohp_penerima') is-invalid @enderror" name="nohp_penerima" placeholder="No Handphone">
              
              @error('nohp_penerima')
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
              <textarea name="alamat_penerima" class="form-control @error('alamat_penerima') is-invalid @enderror" rows="5"></textarea>
              
              @error('alamat_penerima')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <h4 class="mt-4">Informasi Pengiriman :</h4>
        <hr>
        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">No Resi</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="text" class="form-control @error('no_resi') is-invalid @enderror" name="no_resi" placeholder="No Resi" value="INV{{ date('Y') }}{{ $noResi->no_resi }}" readonly>
              
              @error('no_resi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Kantor Tujuan</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <select class="form-control select2bs4" name="kantorcabang_id">
                <option selected>-- Pilih Kantor Cabang --</option>
                @foreach ($kantorcabang as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kantor }}</option>
                @endforeach
              </select>

              @error('kantorcabang_id')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Jenis barang</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <select class="form-control" name="jenis_barang" id="jenis_barang" onchange="total()">
                <option selected>-- Pilih Jenis --</option>
                <option value="Dokumen">Dokumen</option>
                <option value="Paket">Paket</option>
              </select>

              @error('jenis_barang')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Layanan</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <select class="form-control" name="layanan" id="layanan" onchange="total()">
                <option selected>-- Pilih Layanan --</option>
                <option value="Reguler">Reguler</option>
                <option value="Sameday">Sameday</option>
              </select>

              @error('layanan')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Berat</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <input type="number" class="form-control @error('berat') is-invalid @enderror" name="berat" placeholder="Berat" id="berat" onchange="total()">
              <div class="input-group-append">
                <div class="input-group-text">
                  Kg
                </div>
              </div>

              @error('berat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Jarak</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <select class="form-control select2bs4" name="jarak_id" id="jarak_id" onchange="total()">
                <option selected>-- Pilih Jarak --</option>
                @foreach ($jarak as $item)
                    <option value="{{ $item->harga }}">{{ $item->jarak }} = Rp {{ $item->harga }}</option>
                @endforeach
              </select>

              @error('jarak_id')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Biaya</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <div class="input-group-append">
                <div class="input-group-text">
                  Rp
                </div>
              </div>
              <input type="number" class="form-control @error('biaya') is-invalid @enderror" name="biaya" id="biaya" placeholder="Total Biaya" readonly>

              @error('biaya')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-lg-2 col-form-label">Status</label>
          <div class="col-sm-9 col-lg-10">
            <div class="input-group">
              <select class="form-control" name="status">
                <option selected>-- Pilih Status --</option>
                <option value="Input">Input</option>
                <option value="Keluar">Keluar</option>
                <option value="Dibawa">Dibawa</option>
                <option value="Diterima">Diterima</option>
              </select>

              @error('status')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/pengiriman" class="btn btn-danger float-right">Cancel</a>
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

    <script>
      function total() {
        var valueJenisBarang = document.getElementById('jenis_barang').value;
        var valueLayanan     = document.getElementById('layanan').value;
        var valueBerat       = parseInt(document.getElementById('berat').value);
        var valueJarak       = parseInt(document.getElementById('jarak_id').value);

        //Menentukan harga Jenis Barang
        if(valueJenisBarang == 'Dokumen') {
          var nilaiJenisBarang = 1000;
        } else {
          var nilaiJenisBarang = 2000;
        }

        //Menentukan harga Jenis Layanan
        if(valueLayanan == 'Reguler') {
          var nilaiLayanan = 2000;
        } else {
          var nilaiLayanan = 5000;
        }

        var totalBiaya = nilaiJenisBarang + (nilaiLayanan * valueBerat) + valueJarak;

        document.getElementById('biaya').value = totalBiaya;
      }
    </script>
@endpush