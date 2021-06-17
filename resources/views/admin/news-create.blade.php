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
                        <!-- <label for="konten">Konten: </label>
                        <textarea type="text" class="form-control" required="required" name="konten"></textarea></br> -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Konten Artikel
                                    </div>
                                    <div class="card-body">
                                        <textarea name="konten" id="mytextarea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/kh8lffge6fyu360btm9xzb1xopphcr2ll6k13h1xi5hlx8mx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Menambah Tiny MCE HTML Editor -->
<script>
    tinymce.init({
        selector:'#mytextarea'
    });
</script>
<!-- End Tiny MCE -->
@endpush