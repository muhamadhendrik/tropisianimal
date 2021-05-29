<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\{Berita, Galeri, Kontak, Tentang};

class UserController extends Controller
{
    public function home(){
        $berita = Berita::latest()->paginate(6);
        return view('index', compact('berita'));
    }

    public function berita(){
        $berita = Berita::latest()->paginate(6);
        return view('berita', compact('berita'));
    }

    public function show(Berita $berita){
        return view('berita-show', compact('berita'));
    }

    public function tentang(){
        $tentang = Tentang::get();
        return view('tentang', compact('tentang'));
    }

    public function kontak(){
        $kontak = Kontak::get();
        return view('kontak', compact('kontak'));
    }

    public function galeri(){
        $galeri = Galeri::get();
        return view('galeri', compact('galeri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subjek' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'deskripsi' => 'required'
        ]);

        Kontak::create([
            'subjek' => $request->subjek,
            'nama' => $request->nama,
            'email' => $request->email,
            'deskripsi' => $request->deskripsi
        ]);
        session()->flash('success','Pesan Terkirim');

        return redirect('/kontak');
    }
}
