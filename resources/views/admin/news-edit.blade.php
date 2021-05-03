@extends('layouts.master')
@section('title', 'Edit Newss')
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
@section('sub-page', 'Edit')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit News</h3>
        </div>
        <form action="{{route('admin.news.update',['news'=>$news->id])}}" method="post" enctype="multipart/form-data">
            <!-- menambahkan method PUT agar bisa mengedit -->
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" required="required" name="judul" value="{{ $news->judul }}"></br>
                </div>
                <div class="form-group">
                    <label for="konten">Content</label>
                    <input type="text" class="form-control" required="required" name="konten" value="{{ $news->konten }}"></br>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" required="required" name="kategori" value="{{ $news->kategori }}"></br>
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" required="required" name="penulis" value="{{ $news->penulis }}"></br>
                </div>
                <div class="form-group">
                    <label for="gambar">Feature Image</label>
                    <input type="file" class="form-control" name="image" value="{{ $news->gambar }}"></br>
                    <img width="150px" src="{{ asset('storage/'.$news->gambar) }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-left">Ubah Data</button>
            </div>
        </form>
    </div>

</div>
@endsection


@push('custom-js')

@endpush