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


<style>
    body {
        font-family: "Nunito";
    }
</style>
@endpush

@section('title-page', 'Users Page')
@section('sub-page', 'Show')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email User</label>
                    <input type="email" readonly value="{{$data->email}}" required name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text"required readonly value="{{$data->name}}" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                  </div>    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" required readonly  value="{{$data->phone}}" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone">
                  </div>    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birth Date</label>
                    <input type="date"required readonly  value="{{$data->birth}}"  name="birth" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="">Address</label>
                    <textarea class="form-control" readonly name="address" placeholder="Address user... ">
                    {{$data->address}}
                    </textarea>
                  </div>
                  <div class="form-group"><label for="exampleInputPassword1">Gender</label>

                   <select class="form-control" disabled name="gender">
                   <option value="">Pilih gender</option>

                    <option value="Laki-laki" {{ ( $data->gender == 'Laki-laki') ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ ( $data->gender == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
                   </select>
                  </div>
                  <div class="form-group"><label for="exampleInputPassword1">Admin or User</label>

                   <select class="form-control" disabled name="admin">
                   <option value="">Adminuser ?</option>
                    <option value="y"{{ ( $data->admin == 'y') ? 'selected' : '' }} >Yes</option>
                    <option value="n" {{ ( $data->admin == 'n') ? 'selected' : '' }}>No</option>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" readonly required name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a class="btn btn-primary" href="{{url('admin/users')}}">Kembali</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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