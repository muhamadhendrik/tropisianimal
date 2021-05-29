@extends('layouts/layout')
@section('title','Tropsianimal | Home')
@section('text1','Hewan')
@section('text2','Tropis di Dunia')
@section('caption','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus suscipit porro excepturi dolore tempora ipsum laboriosam iusto consectetur! Explicabo voluptas consequatur suscipit doloremque amet aut')
@section('top')

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col sm-6">
            <h6 class="text-uppercase text-success font-weight-bolder">Tentang Kami</h6>
            <h1 class="text-body fw-800">Membangun <br> Komunitas Hewan</h1>
            <p class="font-weight-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, cumque sed? Aliquid, tempore deleniti. Nisi iure fugit earum eligendi beatae, excepturi incidunt qui porro distinctio illum</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima inventore dolorem illo similique voluptates voluptate et, ducimus sunt rerum cum ut expedita eveniet molestias magni. Saepe, omnis dolores!</p>
            <a href="{{ url('/tentang') }}" style="padding:10px" class="btn btn-success rounded-0">Baca selengkapnya
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                </svg>
            </a>
        </div>
       <!--Konten Gambar-->
        <div class="col-sm-6">
            <img src="{!! asset('css/img/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png') !!}" alt="" max-width="100%" height="auto" class="img-fluid mt-4">

            <img src="{!! asset('css/img/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') !!}" float="left" max-width="100%" height="auto"  class="img-fluid mt-4">

            <img src="{!! asset('css/img/x1/Group 77.png') !!}" max-width="100%" height="auto" class="img-fluid mt-2">
        </div>
    </div>
</div>
    <div class="wrapper-bg">
        <div class="container">
            <h1 class="mt-5 fw-800">Kami Membawa Anda <br> Untuk Mengetahui Lebih Dalam</h1>
            <div class="card-deck text-center text-body">
            <div class="card rounded-0 animate" style="height:280px">
                    <div class="card-body">
                    <img style="padding:15px;" src="{!! asset('css/svg/pawprint.svg') !!}" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Lorem ipsum dolor sit amet</h5>
                    <p class="text-muted  mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus</p>
                    </div>
                </div>
                <div class="card rounded-0 animate" style="height:280px">
                    <div class="card-body">
                    <img style="padding:15px;" src="{!! asset('css/svg/pawprint.svg') !!}" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Lorem ipsum dolor sit amet</h5>
                    <p class="text-muted  mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus</p>
                    </div>
                </div>
                <div class="card rounded-0 animate" style="height:280px">
                    <div class="card-body">
                    <img style="padding:15px;" src="{!! asset('css/svg/pawprint.svg') !!}" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Lorem ipsum dolor sit amet</h5>
                    <p class="text-muted mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus</p>
                    </div>
                </div>
                <div class="card rounded-0 animate" style="height:280px">
                    <div class="card-body">
                    <img style="padding:15px;" src="{!! asset('css/svg/pawprint.svg') !!}" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Lorem ipsum dolor sit amet</h5>
                    <p class="text-muted text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 nb-5">
        <div class="form-group">
            <div class="card-header bg-transparent border-0">
            <h6 class="text-uppercase text-success font-weight-bolder">Tentang Kami</h6>
            <h1 class="mt-5 fw-800">Baca Berita Terbaru Kami</h1>
            <h1 class="fw-800">Dalam Tropisianimal</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3">
            @foreach($berita as $b)
            <div class="col mb-4">
              <div class="card text-center bg-light shadow">
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
    <div class="container">
        <div class="form-group">
            <div class="card-header bg-transparent border-0">
                <h6 class="text-uppercase text-success font-weight-bolder">Galeri</h6>
                <h1 class="mt-5 fw-800">Lihat Lebih Banyak Hewan Tropis</h1>
                <h1 class="fw-800">Pada Galeri Kami</h1>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="margin:0;">
    <div class="col fit" style="margin:0; padding:0; background-image:url({!! asset('css/img/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') !!});">
    <div class="text-center" style="margin-top:120px;">
        <button style="padding:10px" class="btn btn-success rounded-0 " disabled>
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
         </button>
        </div>
    </div>
    <div class="col fit" style="margin:0; padding:0; background-image:url({!! asset('css/img/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') !!});">
    </div>
    <div class="col fit" style="margin:0; padding:0; background-image:url({!! asset('css/img/x1/oscar-merchant-sCt1TLNIxFw-unsplash.png') !!}); ">
    </div>
    <div class="col fit" style="margin:0; padding:0; background-image:url({!! asset('css/img/x1/david-clode-0lwa8Dprrzs-unsplash.png') !!});">
        <div class="text-center" style="margin-top:120px;">
        <a href="{{ url('/galeri') }}" style="padding:10px" class="btn btn-success rounded-0">
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg>
    </a>
        </div>
    </div>
  </div>
@endsection
