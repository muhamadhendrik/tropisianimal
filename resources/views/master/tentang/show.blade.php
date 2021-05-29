@extends('layouts.app',['title'=>'Detail Tentang'])
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Tentang</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('tentang.index') }}">Tentang Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                    <h4 class="card-title">Detail Tentang</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label class="float-left" for="subjudul">Sub Judul:</label>
                                <p id="subjudul">{{ $tentang->subjudul }}</p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label class="float-left" for="subjudul">Deskripsi:</label>
                                <p id="subjudul">{{ $tentang->deskripsi }}</p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label class="float-left" for="subjudul">Visi:</label>
                                <p id="subjudul">{{ $tentang->visi }}</p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label class="float-left" for="subjudul">Misi:</label>
                                <p id="subjudul">{{ $tentang->misi }}</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
