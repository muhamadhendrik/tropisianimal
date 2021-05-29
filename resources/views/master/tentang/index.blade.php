@extends('layouts.app',['title'=>'Admin Tropisianimal | Tentang'])
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tentang</h3>
                @include('master.partials.alert')
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tentang</li>
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
                        <h4 class="card-title">Data Tentang Kami</h4>
                        @if($banyak_tentang >= 1)
                            <strong>Data Tentang Maksimal 1</strong>
                        @else
                            <a class="btn btn-primary btn-sm round" href="{{ route('tentang.create') }}">Tambah Tentang</a>
                        @endif

                    </div>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Sub judul</th>
                                    <th>Deskripsi</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                @forelse($tentang as $t)
                                    <tr>
                                        <td class="text-bold-500">{{ $loop->iteration + $tentang->firstItem() - 1 . '.'}}</td>
                                        <td>{{ Str::limit($t->subjudul, 20) }}</td>
                                        <td>{{ Str::limit($t->deskripsi, 20) }}</td>
                                        <td>{{ Str::limit($t->visi, 20) }}</td>
                                        <td>{{ Str::limit($t->misi, 20) }}</td>
                                        <td>
                                            <a href="{{ route('tentang.show', $t->id) }}" class="btn icon btn-info"><i data-feather="eye"></i></a>
                                            <a href="{{ route('tentang.edit', $t->id) }}" class="btn icon btn-primary"><i data-feather="edit"></i></a>
                                            <form action="{{ route('tentang.hapus',$t->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn icon btn-danger" onclick="return confirm('Yakin Mau Hapus?')">
                                                   <i data-feather="trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @empty
                                        <td colspan="6" class="text-center">Data Tentang Kami Kosong</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            {{ $tentang->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
