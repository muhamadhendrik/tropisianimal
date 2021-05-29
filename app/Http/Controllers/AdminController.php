<?php

namespace App\Http\Controllers;

use \App\{Berita, Galeri, Kontak, Tentang};

class AdminController extends Controller
{
    public function index(){
        return view('master.index', [
            'data_berita' => Berita::count(),
            'data_galeri' => Galeri::count(),
            'data_kontak' => Kontak::count(),
            'data_tentang' => Tentang::count(),
        ]);
    }
}
