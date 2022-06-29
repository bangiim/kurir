@extends('backend.layout.master')

@section('judul')
Data Kantor Cabang
@endsection
    
@section('content')
  <div class="card">
    {{-- Level Admin --}}
    @if(Auth::user()->level_id=='1')
      <div class="card-header">
        <a href="/kantor-cabang/create" class="btn btn-success"><i class="fas fa-plus"></i> Add Data</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kantor</th>
              <th>Kota</th>
              <th>No Telp</th>
              <th>Jam Operasional</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kantorcabang as $key => $item)
              <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama_kantor}}</td>
                <td>
                  @foreach ($cities as $itemKota)
                    @if ($itemKota->id === $item->city_id)
                        {{ $itemKota->name }}
                    @endif
                  @endforeach
                </td>
                <td>{{$item->no_telp}}</td>
                <td>{{$item->jam_operasional}}</td>
                <td>
                  <form action="/kantor-cabang/{{$item->id}}" method="post">
                    <a href="/kantor-cabang/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/kantor-cabang/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                  </form>
                  {{-- <a href="/kantor-cabang/create" class="btn btn-danger btn-sm">Delete</a> --}}
                </td>
              </tr>

            @empty
              <tr>
                <td colspan="6">Data Masih Kosong</td>
              </tr>

            @endforelse
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama Kantor</th>
              <th>Kota</th>
              <th>No Telp</th>
              <th>Jam Operasional</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    {{-- Level Manager --}}
    @elseif(Auth::user()->level_id=='3')
      <div class="card-body">
        <table id="export-data" class="table table-bordered table-striped">
          <thead> 
            <tr>
              <th>No</th>
              <th>Nama Kantor</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>No Telp</th>
              <th>Jam Operasional</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kantorcabang as $key => $item)
              <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama_kantor}}</td>
                <td>{{$item->alamat}}</td>
                <td>
                  @foreach ($cities as $itemKota)
                    @if ($itemKota->id === $item->city_id)
                        {{ $itemKota->name }}
                    @endif
                  @endforeach
                </td>
                <td>{{$item->no_telp}}</td>
                <td>{{$item->jam_operasional}}</td>
              </tr>

            @empty
              <tr>
                <td colspan="6">Data Masih Kosong</td>
              </tr>

            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    @endif
  </div>
@endsection

@push('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endpush

@push('script')
  <!-- DataTables -->
  <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

  <script>
    $(function () {
      $("#example").DataTable();
    });

    $(document).ready(function() {
      $('#export-data').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
  </script>
@endpush
