<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Karyawan</title>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Data Karyawan</h1>
            <a href="{{ route('karyawan.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+ Tambah</a>
        </div>

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2 text-left">Nama</th>
                    <th class="border px-4 py-2 text-left">Jabatan</th>
                    <th class="border px-4 py-2 text-left">No HP</th>
                    <th class="border px-4 py-2 text-left">Alamat</th>
                    <th class="border px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $item)
                <tr class="hover:bg-gray-50">
                    <td class="border px-4 py-2">{{ $item->nama }}</td>
                    <td class="border px-4 py-2">{{ $item->jabatan }}</td>
                    <td class="border px-4 py-2">{{ $item->no_hp }}</td>
                    <td class="border px-4 py-2">{{ $item->alamat }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('karyawan.edit', $item) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                        <form action="{{ route('karyawan.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if ($karyawan->isEmpty())
            <p class="text-center text-gray-500 mt-4">Data karyawan belum ada.</p>
        @endif
    </div>

</body>
</html>
