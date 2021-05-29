@extends('layouts/main')

@section('title','Tropsianimal | Berita')
@section('text1','Berita')
@section('top')
<div class="container my-4">
    <div class="row">
        <div class="col text-center">
            <img src="{{ asset($berita->takeImage) }}" class="img-fluid">
            <div class="py-4">
                <h5 class="card-title">{{ $berita->judul_brt }}</h5>
                <p class="card-text">{{ $berita->berita }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
