<?php

namespace App\Http\Controllers;

use App\Kontak;

class KontakController extends Controller
{

    public function index()
    {
        return view('master/kontak/index',[
            'kontak' => Kontak::latest()->paginate(5),
        ]);

    }

    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        session()->flash("success","Kontak telah di hapus");

        return redirect('/master/kontak');
    }
}
