@extends('layouts.master')
@section('title', 'Show News')
@push('custom-css')
@endpush

@section('title-page', 'News Page')
@section('sub-page', 'Detail')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h3>{{ $news->judul}}</h3>
            </div>
        </div>
    </div>
</div>
    
@endsection


@push('custom-js')

@endpush