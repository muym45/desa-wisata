<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Karyawan</title>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Tambah Karyawan</h1>

        <form method="POST" action="{{ route('karyawan.store') }}">
            @csrf

            <label class="block mb-2 font-semibold">Nama</label>
            <input type="text" name="nama" class="w-full border p-2 rounded mb-4" required>

            <label class="block mb-2 font-semibold">Jabatan</label>
            <input type="text" name="jabatan" class="w-full border p-2 rounded mb-4" required>

            <label class="block mb-2 font-semibold">No HP</label>
            <input type="text" name="no_hp" class="w-full border p-2 rounded mb-4" required>

            <label class="block mb-2 font-semibold">Alamat</label>
            <textarea name="alamat" class="w-full border p-2 rounded mb-4" required></textarea>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
                <a href="{{ route('karyawan.index') }}" class="text-gray-600 hover:underline">Batal</a>
            </div>
        </form>
    </div>

</body>
</html>
