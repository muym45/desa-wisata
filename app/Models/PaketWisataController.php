<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function index()
    {
        $data = PaketWisata::all();
        return view('paket_wisata.index', compact('data'));
    }

    public function create()
    {
        return view('paket_wisata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'harga_per_pack' => 'required|numeric',
        ]);

        PaketWisata::create($request->all());

        return redirect()->route('paket_wisata.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(PaketWisata $paket_wisata)
    {
        return view('paket_wisata.edit', compact('paket_wisata'));
    }

    public function update(Request $request, PaketWisata $paket_wisata)
    {
        $request->validate([
            'nama_paket' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'harga_per_pack' => 'required|numeric',
        ]);

        $paket_wisata->update($request->all());

        return redirect()->route('paket_wisata.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(PaketWisata $paket_wisata)
    {
        $paket_wisata->delete();
        return redirect()->route('paket_wisata.index')->with('success', 'Data berhasil dihapus');
    }
}
