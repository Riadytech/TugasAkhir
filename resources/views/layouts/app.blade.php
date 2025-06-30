<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata360</title>
    <!-- Tambah Bootstrap CDN atau file CSS lain -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing') }}">WebWisata360</a>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container">
        @yield('content') <!-- Tempat isi dari setiap halaman -->
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 mt-4">
        <p>© 2025 Wisata360 - All rights reserved</p>
    </footer>

    <!-- JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
