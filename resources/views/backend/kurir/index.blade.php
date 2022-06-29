@extends('backend.layout.master')

@section('judul')
Data Kurir
@endsection
    
@section('content')
  <div class="card">
    {{-- Level Admin --}}
    @if(Auth::user()->level_id=='1')
      <div class="card-header">
        <a href="/kurir/create" class="btn btn-success"><i class="fas fa-plus"></i> Add Data</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>No HP</th>
              <th>Email</th>
              <th>Kantor Cabang</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kurir as $key => $item)
              <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->no_hp}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->kantorcabang->nama_kantor}}</td>
                <td>
                  <form action="/kurir/{{$item->id}}" method="post">
                    <a href="/kurir/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                  </form>
                  {{-- <a href="/kurir/create" class="btn btn-danger btn-sm">Delete</a> --}}
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
              <th>Nama</th>
              <th>No HP</th>
              <th>Email</th>
              <th>Kantor Cabang</th>
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
              <th>Nama</th>
              <th>No HP</th>
              <th>Email</th>
              <th>Kantor Cabang</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kurir as $key => $item)
              <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->no_hp}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->kantorcabang->nama_kantor}}</td>
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
