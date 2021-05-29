@extends('layouts/main')

@section('title','Tropsianimal | Tentang')
@section('text1','Tentang')
@section('top')
<div class="container mb-5 mt-5">

                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="text-body font-weight-bolder">Tropsianimal</h1>
                            @foreach($tentang as $t)
                            <p class="font-weight-bold">{{ $t->subjudul }}</p>
                            <p>{{ $t->deskripsi }}</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="{!! asset('css/img/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') !!}" alt="" class="img-fluid mb-2">
                            <img src="{!! asset('css/img/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') !!}" alt="" max-width="100%" height="auto" class="img-fluid mb-2">
                            <img src="{!! asset('css/img/x1/smit-patel-dGMcpbzcq1I-unsplash.png') !!}" alt="" class="img-fluid mb-2">
                        </div>
                    </div>

            <div class="row">
                <div class="col">
                    <h1 class="text-body font-weight-bold">Visi</h1>
                    <p class="font-weight-bold">{{ $t->visi }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-body font-weight-bold">Misi</h1>
                    <p class="font-weight-bold">{{ $t->misi }}</p>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection
