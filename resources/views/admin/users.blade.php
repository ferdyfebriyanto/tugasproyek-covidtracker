@extends('layouts.master')
@section('title', 'Users')
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

<style>
    body {
        font-family: "Nunito";
    }
</style>
@endpush

@section('title-page', 'Users Page')
@section('sub-page', 'index')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Table</h3>
               
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <a class="btn btn-info"href="{{route('admin.users.create')}}">Create User</a>
                <table  id="users" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                            <th >Name</th>
                            <th>Gender</th>
                            <th>Birth</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Admin</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no =1 @endphp
                    @foreach($data as $user)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->birth}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                            @if($user->admin=='y')
                            Yes
                            @else
                            No
                            @endif
                            </td>
                            <td>
                            <form action="{{route('admin.users.destroy',['user'=>$user->id])}}"method="POST">

                            <a title="show user" href="{{route('admin.users.show',['user'=>$user->id])}}"><i class="fa fa-user">
                            </i></a>
                            &nbsp;
                            <a title="edit user" href="{{route('admin.users.edit',['user'=>$user->id])}}"><i class="fa fa-edit">
                            </i></a>
                            @csrf
                            @method('DELETE')
                            &nbsp;

                            <a title="delete user" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="{{url('users/delete/'.$user->id)}}"><i class="fa fa-trash">
                            </i></a>
                             </td>
                        </tr>
                    @php $no++ @endphp
                    @endforeach
                    </tbody>
                </table>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<!-- <script src="{{ asset ('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>


  $(document).ready(function() {
    $('#users').DataTable();
} );
</script>
@endpush