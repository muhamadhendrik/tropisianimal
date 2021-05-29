@extends('layouts.app',['title' => 'Detail Berita'])
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Berita</h3>
            @include('master.partials.alert')
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Berita</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label class="float-left" for="judul_berita">Judul Berita:</label>
                                <p id="judul_berita">{{ $berita->judul_brt }}</p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label class="float-left" for="berita">Deskripsi Berita:</label>
                                <p id="berita">{{ $berita->berita }}</p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label class="float-left" for="thumbnail">Thumbnail Berita</label>
                                <img id="thumbnail" width="200px" src="{{ asset($berita->takeImage) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
