<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit User</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Edit User</h1>

        <form method="POST" action="{{ route('users.update', $user) }}">
            @csrf
            @method('PUT')

            <label>Email</label>
            <input name="email" type="email" value="{{ $user->email }}" class="w-full border p-2 rounded mb-2" required>

            <label>Level</label>
            <select name="level" class="w-full border p-2 rounded mb-2">
                @foreach(['admin', 'bendahara', 'pelanggan', 'pemilik'] as $level)
                    <option value="{{ $level }}" @if($user->level === $level) selected @endif>{{ ucfirst($level) }}</option>
                @endforeach
            </select>

            <label><input type="checkbox" name="aktif" @if($user->aktif) checked @endif> Aktif</label>

            <div class="mt-4">
                <button class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('users.index') }}" class="ml-2 text-gray-600">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
