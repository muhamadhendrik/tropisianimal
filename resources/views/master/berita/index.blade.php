@extends('layouts.app',['title' => 'Admin Tropisianimal | Berita'])
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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="card-title">Data Berita</h4>
                        <a class="btn btn-primary btn-sm round" href="{{ route('berita.create') }}">Tambah Berita</a>
                    </div>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Body</th>
                                    <th>Thumbnail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                @forelse($berita as $b)
                                    <tr>
                                        <td>{{ $loop->iteration + $berita->firstItem() - 1 . '.'}}</td>
                                        <td>{{ $b->judul_brt }}</td>
                                        <td>{{ Str::limit($b->berita, 30, '.') }}</td>
                                        <td><img width="100px" src="{{ asset($b->takeImage) }}"></td>
                                        <td>
                                            <a href="{{ route('berita.edit', $b->slug) }}" class="btn icon btn-primary"><i data-feather="edit"></i></a>
                                            <a href="{{ route('berita.show', $b->slug) }}" class="btn icon btn-info"><i data-feather="eye"></i></a>
                                            <form action="{{ route('berita.hapus', $b->slug ) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn icon btn-danger"><i data-feather="trash" onclick="return confirm('Yakin mau hapus?')"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="6" class="text-center">Tidak ada berita</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
