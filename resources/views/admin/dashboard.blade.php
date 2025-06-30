<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f8;
            margin: 0;
        }

        .navbar {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 20px;
        }

        .navbar a, .navbar button {
            color: #ecf0f1;
            text-decoration: none;
            margin-left: 1rem;
            font-size: 14px;
            background: none;
            border: none;
            cursor: pointer;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .card-body {
            padding: 1rem;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 0.5rem;
            color: #34495e;
        }

        .card-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .card-actions a {
            font-size: 13px;
            color: #2980b9;
            margin-right: 10px;
            text-decoration: none;
        }

        .footer {
            text-align: center;
            padding: 1rem;
            font-size: 13px;
            color: #999;
            margin-top: 3rem;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h1>Admin Panel</h1>
        <div>
            <a href="#">Beranda</a>
            <a href="{{ route('admin.destinasi.create') }}">Tambah Destinasi</a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>

    <div class="container">
        <h2>Daftar Destinasi Wisata</h2>

        @if($destinasi->count() > 0)
            <div class="card-grid">
                @foreach($destinasi as $item)
                    <div class="card">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}">
                        <div class="card-body">
                            <div class="card-title">{{ $item->nama }}</div>
                            <div class="card-text"><strong>Lokasi:</strong> {{ $item->lokasi }}</div>
                            <div class="card-text">{{ Str::limit($item->deskripsi, 80) }}</div>
                            <div class="card-actions">
                                <a href="{{ route('admin.destinasi.index') }}">Lihat Detail Destinasi</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Tidak ada destinasi ditemukan.</p>
        @endif
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Wisata360. All rights reserved.
    </div>

</body>
</html>
