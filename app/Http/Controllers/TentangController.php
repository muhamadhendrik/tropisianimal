<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{

    public function index()
    {
        return view('master/tentang/index',[
            'banyak_tentang' => Tentang::count(),
            'tentang' => Tentang::latest()->paginate(5),
        ]);
    }

    public function create(Tentang $tentang)
    {
        return view('master.tentang.create', compact('tentang'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'subjudul' => 'required|string',
            'deskripsi' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $attr = $request->all();
        Tentang::Create($attr);

        session()->flash('success','Tentang telah ditambahkan');

        return redirect('/master/tentang');
    }

    public function show(Tentang $tentang){
        return view('master.tentang.show', compact('tentang'));
    }

    public function edit(Tentang $tentang)
    {
        return view('master.tentang.edit', compact('tentang'));
    }

    public function update(Request $request, $id)
    {
        $attr = $request->all();

        $this->validate($request,[
            'subjudul' => 'required|string',
            'deskripsi' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $tentang = Tentang::findOrFail($id);
        $tentang->update($attr);
        session()->flash('success','Tentang telah diupdate');

        return redirect('/master/tentang');
    }

    public function destroy($id)
    {
        $tentang = Tentang::findOrFail($id);
        $tentang->delete();
        session()->flash("success","Tentang telah di hapus");

        return redirect('/master/tentang');
    }
}
