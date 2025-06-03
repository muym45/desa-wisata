<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Desa Wisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-white shadow p-4 mb-6">
        <div class="container mx-auto">
            <a href="/" class="font-bold text-lg">Desa Wisata</a>
        </div>
    </nav>

    <main class="container mx-auto">
        @yield('content')
    </main>
</body>
</html>
