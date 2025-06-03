<?php

namespace App\Http\Controllers;

use App\Models\KategoriWisata;
use Illuminate\Http\Request;

class KategoriWisataController extends Controller
{
    public function index()
    {
        $kategori_wisata = KategoriWisata::all();
        return view('kategori_wisata.index', compact('kategori_wisata'));
    }

    public function create()
    {
        return view('kategori_wisata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_wisata' => 'required'
        ]);

        KategoriWisata::create($request->all());

        return redirect()->route('kategori_wisata.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(KategoriWisata $kategori_wisata)
    {
        return view('kategori_wisata.edit', compact('kategori_wisata'));
    }

    public function update(Request $request, KategoriWisata $kategori_wisata)
    {
        $request->validate([
            'kategori_wisata' => 'required'
        ]);

        $kategori_wisata->update($request->all());

        return redirect()->route('kategori_wisata.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(KategoriWisata $kategori_wisata)
    {
        $kategori_wisata->delete();
        return redirect()->route('kategori_wisata.index')->with('success', 'Data berhasil dihapus.');
    }
}
