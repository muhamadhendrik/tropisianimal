@extends('layouts.app',['title' => 'Tambah Berita'])
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
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('master/partials.form-control',['submit' => 'Tambah'])
    </form>

@stop
