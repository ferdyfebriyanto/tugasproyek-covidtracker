@extends('layouts.master')
@section('title', 'News')
@push('custom-css')
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset ('assets/plugins/fontawesome-free/css/all.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset ('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset ('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset ('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset ('assets/dist/css/adminlte.min.css')}}">


<style>
    body {
        font-family: "Nunito";
    }
</style>
@endpush

@section('title-page', 'News Page')
@section('sub-page', 'index')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Berita</h3>
            </div>
            <div class="float-right my-2" style="margin-left: 20px;">
                <a class="btn btn-success" href="{{ route('admin.news.create')}}">Input News</a>
            </div>
            <div style="margin-left: 20px;">
                <form class="input-group" action="{{ route('admin.news.index')}}" method="get">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search artikel">
                </form>
            </div>

            <!-- Notification -->
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            @if ($message = Session::get('danger'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
            @endif
            <!-- End Notification -->

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 1px">#</th>
                            <th style="width: 10px;">Gambar</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Terakhir Update</th>
                            <th style="width: 150px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($paginate) > 0)
                        @php $no=1; @endphp
                        @foreach ($news as $item)

                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img width="150px" src="{{ asset('storage/'.$item->gambar) }}"></td>
                            
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->konten }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('admin.news.edit', $item->id) }}"><i class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        @else
                        <h6 class="text-danger">*User Not Found</h6>
                        @endif
                    </tbody>

                </table>

                <div class="d-flex float-right" style="margin-top: 20px;">
                    {{$paginate->links('pagination::bootstrap-4')}}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection


@push('custom-js')
<!-- jQuery -->
<script src="{{ asset ('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset ('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endpush