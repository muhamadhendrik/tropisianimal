<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Http\Requests\BeritaRequest;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Berita $berita)
    {
        return view('master/berita/index',[
            'berita' => $berita->latest()->paginate(5),
        ]);
    }

    public function create(Berita $berita)
    {
        return view('master/berita/create', compact('berita'));
    }

    public function store(BeritaRequest $request)
    {
        $request->validate([
            'thumbnail_brt' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
        ]);
        $attr = $request->all();

        $slug = \Str::slug(request('judul_brt'));
        $attr['slug'] = $slug;

        $thumbnail=request()->file('thumbnail_brt');
        $thumbnailUrl = $thumbnail->store("img/berita");

        $attr['thumbnail_brt'] = $thumbnailUrl;

        Berita::create($attr);

        session()->flash('success','Berita telah ditambahkan');

        return redirect('/master/berita');
    }

    public function show(Berita $berita)
    {
       return view('master/berita.show',compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('master/berita.edit',compact('berita'));
    }


    public function update(BeritaRequest $request,Berita $berita)
    {
        $attr = $request->all();

        $request->validate([
            'thumbnail_brt' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
        ]);

        if(request()->file('thumbnail_brt')){
            \Storage::delete($berita->thumbnail_brt);
            $thumbnail=request()->file('thumbnail_brt')->store("img/berita");
        } else{
            $thumbnail = $berita->thumbnail_brt;
        }

        $attr['thumbnail_brt'] = $thumbnail;

        $berita->update($attr);
        session()->flash('success','Berita telah diupdate');

        return redirect('/master/berita');
    }


    public function destroy(Berita $berita)
    {
        \Storage::delete($berita->thumbnail_brt);
        $berita->delete();
        session()->flash("success","Berita telah di hapus");

        return redirect('/master/berita');
    }
}
