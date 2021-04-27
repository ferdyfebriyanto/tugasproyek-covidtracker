@extends('layouts.master')
@section('title', 'Edit Newss')
@push('custom-css')

@endpush

@section('title-page', 'News Page')
@section('sub-page', 'Edit')

@section('content')
<div class="container">
    <form action="/admin/news/{{$news->id}}" method="post" enctype="multipart/form-data">
        <!-- menambahkan method PUT agar bisa mengedit -->
        @method('PUT')
        @csrf
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
        <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
    </form>
</div>
@endsection


@push('custom-js')

@endpush