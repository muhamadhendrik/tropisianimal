@extends('layouts/main')
@section('title','Tropsianimal | Galeri')
@section('text1','Galeri')
@section('top')
    <div class="container mt-5 mb-5">
        <div class="form-group">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
            @foreach($galeri as $g)
            <div class="carousel-item {{ $g->status }}">
                <img width="100%" height="350px" object-fit="cover" src="{{ asset($g->takeImage) }}" >
            </div>
            @endforeach
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4">
            @foreach($galeri as $g)
            <div class="col mb-3">
              <div class="card text-center bg-light shadow overflow-auto">
                <img src="{{ asset($g->takeImage) }}" height="200px" class="card-img-top">
              </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
