<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{

    public function index()
    {
        return view('master/galeri/index',[
            'galeri' => Galeri::latest()->paginate(5),
        ]);
    }


    public function create(Galeri $galeri)
    {
        return view('master/galeri/create',compact('galeri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:png,jpg,jpeg,svg|max:3408',
        ]);
        $attr = $request->all();

        $gambar=request()->file('gambar');
        $gambarUrl = $gambar->store("img/galeri");

        $attr['gambar'] = $gambarUrl;

        Galeri::create($attr);

        session()->flash('success','Gambar telah ditambahkan');

        return redirect('/master/galeri');
    }

    public function edit(Galeri $galeri)
    {

        return view('master/galeri.edit',compact('galeri'));
    }


    public function update(Request $request,Galeri $galeri)
    {
        $attr = $request->all();

        $request->validate([
            'gambar' => 'required|mimes:png,jpg,jpeg,svg|max:3408',
        ]);

        if(request()->file('gambar')){
            \Storage::delete($galeri->gambar);
            $thumbnail=request()->file('gambar')->store("img/gambar");
        } else{
            $thumbnail = $galeri->gambar;
        }

        $attr['gambar'] = $thumbnail;

        $galeri->update($attr);
        session()->flash('success','gambaar telah diupdate');

        return redirect('/master/galeri');
    }


    public function destroy(Galeri $galeri)
    {
        \Storage::delete($galeri->gambar);
        $galeri->delete();
        session()->flash("success","Galeri telah di hapus");

        return redirect('/master/galeri');
    }
}
