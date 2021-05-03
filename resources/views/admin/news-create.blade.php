@extends('layouts.master')
@section('title', 'Create News')
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

@section('title-page', 'Create News')
@section('sub-page', 'create')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h3>Form Input Berita</h3>
            </div><br><br>
            <div class="card-body">
                <form action="{{ route('admin.news.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul: </label>
                        <input type="text" class="form-control" required="required" name="judul"></br>
                        <label for="konten">Konten: </label>
                        <textarea type="text" class="form-control" required="required" name="konten"></textarea></br>
                        <label for="kategori">Kategori: </label>
                        <input type="text" class="form-control" required="required" name="kategori"></br>
                        <label for="penulis">Penulis: </label>
                        <input type="text" class="form-control" required="required" name="penulis"></br>
                        <label for="gambar">Feature Image: </label>
                        <input type="file" class="form-control" required="required" name="image"></br>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@endsection


@push('custom-js')
@endpush