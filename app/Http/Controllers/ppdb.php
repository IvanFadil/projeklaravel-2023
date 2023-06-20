<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ppdb extends Controller
{
    //
    public function beranda()
    {
        return view('beranda');
    }

    public function informasi()
    {
        return view('informasi');
    }

    public function formulir()
    {
        return view('formulir');
    }

    public function cetak()
    {
        return view('cetakkartu');
    }

    public function pengumuman()
    {
        return view('pengumuman');
    }

    public function kontak()
    {
        return view('kontak');
    }

}
