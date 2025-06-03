<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Karyawan</title>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Edit Karyawan</h1>

        <form method="POST" action="{{ route('karyawan.update', $karyawan) }}">
            @csrf
            @method('PUT')

            <label class="block mb-2 font-semibold">Nama</label>
            <input type="text" name="nama" value="{{ $karyawan->nama }}" class="w-full border p-2 rounded mb-4" required>

            <label class="block mb-2 font-semibold">Jabatan</label>
            <input type="text" name="jabatan" value="{{ $karyawan->jabatan }}" class="w-full border p-2 rounded mb-4" required>

            <label class="block mb-2 font-semibold">No HP</label>
            <input type="text" name="no_hp" value="{{ $karyawan->no_hp }}" class="w-full border p-2 rounded mb-4" required>

            <label class="block mb-2 font-semibold">Alamat</label>
            <textarea name="alamat" class="w-full border p-2 rounded mb-4" required>{{ $karyawan->alamat }}</textarea>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Update</button>
                <a href="{{ route('karyawan.index') }}" class="text-gray-600 hover:underline">Kembali</a>
            </div>
        </form>
    </div>

</body>
</html>
