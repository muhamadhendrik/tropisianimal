@extends('layouts/main')

@section('title','Tropsianimal | Berita')
@section('text1','Berita')
@section('top')
    <div class="container">
        <div class="form-group mt-5">
            <div class="card border-0 mt-4">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <img src="{!! asset('css/img/x2/zoe-reeve-9hSejnboeTY-unsplash@2x.png') !!}" class="card-img-top" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <img src="{!! asset('css/img/x1/ronald-gijezen-7h06P9UKhYY-unsplash.png') !!}" alt="">
                        </div>
                        <div class="card-body">
                        <img src="{!! asset('css/img/x1/david-clode-AtCChdVhAmA-unsplash.png') !!}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h1 class="font-weight=bold">10 Hewan Herbivora yang Berbahaya</h1>
                        <p class="font-weight-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, cumque sed? Aliquid, tempore deleniti. Nisi iure fugit earum eligendi beatae, excepturi incidunt qui porro distinctio illum</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima inventore dolorem illo similique voluptates voluptate et, ducimus sunt rerum cum ut expedita eveniet molestias magni. Saepe, omnis dolores!</p>
                    <button style="padding:10px" class="btn btn-success rounded-0">baca selengkapnya
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 nb-5">
        <div class="form-group">
            <div class="card-header bg-transparent border-0">
            <h1 class="font-weight-bolder mb-2">Berita lainnya</h6>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                @foreach($berita as $b)
                <div class="col mb-4">
                  <div class="card text-center bg-light shadow overflow-auto">
                    <img src="{{ asset($b->takeImage) }}" height="200px" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{ $b->judul_brt}}</h5>
                      <p class="card-text">{{ Str::limit($b->berita, 20) }}</p>
                      <p class="card-text"><a href="{{ route('berita.selengkapnya', $b->slug) }}">Selengkapnya</a></p>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-2">
                {{ $berita->links() }}
            </div>
        </div>
    </div>
@endsection
