@extends('layouts.app',['title'=>'Admin Tropisianimal | Galeri'])
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Galeri</h3>
                @include('master.partials.alert')
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Galeri</li>
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
                        <h4 class="card-title">Data Galeri</h4>
                        <a class="btn btn-primary btn-sm round" href="{{route('galeri.create')}}">Tambah gambar</a>
                    </div>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                @forelse($galeri as $g)
                                    <tr>
                                        <td class="text-bold-500">{{ $loop->iteration + $galeri->firstItem() - 1 . '.'}}</td>
                                        <td><img src="{{ asset($g->takeImage) }}" width="100">
                                        <td>
                                            <a href="{{ route('galeri.edit', $g->id) }}" class="btn icon btn-primary"><i data-feather="edit"></i></a>
                                            <form action="{{ route('galeri.hapus',$g->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn icon btn-danger" onclick="return confirm('Yakin Mau Hapus?')">
                                                   <i data-feather="trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @empty
                                        <td colspan="3" class="text-center">Tidak Ada gambar</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            {{ $galeri->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
