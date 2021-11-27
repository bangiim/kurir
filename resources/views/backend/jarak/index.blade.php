@extends('backend.layout.master')

@section('judul')
Data Jarak
@endsection
    
@section('content')
  
  <div class="card">
    <div class="card-header">
      <a href="/jarak/create" class="btn btn-success"><i class="fas fa-plus"></i> Add Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Jarak</th>
            <th>Harga</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($jarak as $key => $item)
            <tr>
              <td>{{$key + 1}}</td>
              <td>{{$item->jarak}}</td>
              <td>{{$item->harga}}</td>
              <td>
                <form action="/jarak/{{$item->id}}" method="post">
                  <a href="/jarak/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                  
                  @csrf
                  @method('delete')
                  <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
                {{-- <a href="/jarak/create" class="btn btn-danger btn-sm">Delete</a> --}}
              </td>
            </tr>

          @empty
            <tr>
              <td colspan="4">Data Masih Kosong</td>
            </tr>

          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Jarak</th>
            <th>Harga</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@push('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@push('script')
  <!-- DataTables -->
  <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script>
    $(function () {
      $("#example").DataTable();
    });
  </script>
@endpush
