@extends('layouts.app',['title'=>'Admin Tropisianimal | Kontak'])
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kontak</h3>
                @include('master.partials.alert')
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kontak</li>
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
                        <h4 class="card-title">Data kontak dari user</h4>
                    </div>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Subjek</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Dibuat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                @forelse($kontak as $k)
                                    <tr>
                                        <td class="text-bold-500">{{ $loop->iteration + $kontak->firstItem() - 1 . '.'}}</td>
                                        <td>{{ Str::limit($k->deskripsi, 50) }}</td>
                                        <td>{{ Str::limit($k->subjek, 50) }}</td>
                                        <td>{{ Str::limit($k->nama, 30) }}</td>
                                        <td>{{ Str::limit($k->email, 30) }}</td>
                                        <td>{{ $k->created_at->diffForHumans() }} </td>
                                        <td>
                                            <form action="{{ route('kontak.hapus',$k->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn icon btn-danger" onclick="return confirm('Yakin Mau Hapus?')">
                                                   <i data-feather="trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @empty
                                        <td colspan="7" class="text-center">Data Kontak Kosong</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            {{ $kontak->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
