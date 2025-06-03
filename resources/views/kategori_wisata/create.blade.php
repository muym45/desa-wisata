@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-lg">
    <h1 class="text-xl font-bold mb-4">Tambah Kategori Wisata</h1>

    <form action="{{ route('kategori_wisata.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block">Kategori Wisata</label>
            <input type="text" name="kategori_wisata" class="w-full border px-4 py-2 rounded" required>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('kategori_wisata.index') }}" class="text-gray-600 hover:underline">Batal</a>
    </form>
</div>
@endsection
