<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah User</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Tambah User</h1>

        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <label>Email</label>
            <input name="email" type="email" class="w-full border p-2 rounded mb-2" required>

            <label>Password</label>
            <input name="password" type="password" class="w-full border p-2 rounded mb-2" required>

            <label>Level</label>
            <select name="level" class="w-full border p-2 rounded mb-2">
                <option value="admin">Admin</option>
                <option value="bendahara">Bendahara</option>
                <option value="pelanggan">Pelanggan</option>
                <option value="pemilik">Pemilik</option>
            </select>

            <label><input type="checkbox" name="aktif" checked> Aktif</label>

            <div class="mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                <a href="{{ route('users.index') }}" class="ml-2 text-gray-600">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
