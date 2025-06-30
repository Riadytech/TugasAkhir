<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pengguna - Destinasi Wisata</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            padding-top: 70px;
        }

        /* Header */
        header {
            background: #2c3e50;
            color: white;
            padding: 1rem 2rem;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 20px;
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        /* Main */
        main {
            padding: 2rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            text-decoration: none;
            color: inherit;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
        }

        .card img {
            width: 100%;
            height: 170px;
            object-fit: cover;
        }

        .card-body {
            padding: 1rem;
            flex: 1;
        }

        .card h3 {
            margin: 0 0 0.5rem;
            font-size: 1.2rem;
            color: #2c3e50;
        }

        .card p {
            margin: 0.3rem 0;
            font-size: 14px;
            color: #666;
        }

        .card .alamat {
            font-size: 13px;
            color: #888;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: #ccc;
            padding: 1rem 2rem;
            text-align: center;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    <header>
        <h1>Destinasi Wisata</h1>
        <nav>
            <a href="{{ route('user.dashboard') }}">Beranda</a>
            {{-- <a href="{{ route('logout') }}">Keluar</a> --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="background: none; border: none; color: white; cursor: pointer; font: inherit;">
                    Keluar
                </button>
            </form>
        </nav>
    </header>

    <main>
        <h2 style="text-align:center; margin-bottom: 1.5rem;">Jelajahi Tempat-Tempat Menarik</h2>

        <div class="grid">
            @foreach($destinasi as $item)
                <a href="{{ route('user.destinasi.detail', $item->id) }}" class="card">
                    <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->nama_destinasi }}">
                    <div class="card-body">
                        <h3>{{ $item->nama_destinasi }}</h3>
                        <p>{{ \Illuminate\Support\Str::limit($item->deskripsi, 80) }}</p>
                        <p class="alamat"><strong>📍</strong> {{ $item->alamat }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} Wisata360. Seluruh hak cipta dilindungi.
    </footer>

</body>
</html>
