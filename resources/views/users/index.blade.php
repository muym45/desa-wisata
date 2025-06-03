<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Users</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Daftar User</h1>

        <a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah User</a>

        @if (session('success'))
            <div class="bg-green-100 border mt-4 text-green-700 p-2 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full mt-4 bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Level</th>
                    <th class="px-4 py-2">Aktif</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $user->email }}</td>
                    <td class="px-4 py-2">{{ $user->level }}</td>
                    <td class="px-4 py-2">{{ $user->aktif ? 'Ya' : 'Tidak' }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('users.edit', $user) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Hapus user ini?')" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
