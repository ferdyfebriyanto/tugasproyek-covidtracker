@extends('layouts.master')
@section('title', 'Create News')
@push('custom-css')
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