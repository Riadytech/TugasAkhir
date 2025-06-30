<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Destinasi Wisata</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 2rem;
            background-color: #f5f6fa;
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
            color: #2c3e50;
        }

        .btn-add {
            display: inline-block;
            background-color: #27ae60;
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 2rem;
        }

        .btn-add:hover {
            background-color: #219150;
        }

        .card {
            background-color: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }
        .back-btn{
            display: inline-block;
            padding: 10px 20px;
            background-color: blue;
            color: #f4f4f4;
            border-radius: 6px;
            text-decoration: none;
            /* transition: background-color 0.3ease, transform 0.2ease; */
            cursor: pointer;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1000;
        }

        .card img {
            width: 150px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card-content {
            flex: 1;
        }

        .card h3 {
            margin-top: 0;
            color: #34495e;
        }

        .card p {
            margin: 0.5rem 0;
            color: #666;
        }

        .card .actions {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .card .actions a,
        .card .actions button {
            background-color: #3498db;
            border: none;
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .card .actions a:hover {
            background-color: #2980b9;
        }

        .card .actions button {
            background-color: #e74c3c;
        }

        .card .actions button:hover {
            background-color: #c0392b;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>

    <h1>Daftar Destinasi Wisata</h1>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary back-btn">Kembali ke Dashboard</a>
    <a href="{{ route('admin.destinasi.create') }}" class="btn-add">+ Tambah Destinasi</a>

    @foreach($destinasi as $item)
        <div class="card">
            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->nama }}">
            <div class="card-content">
                <h3>{{ $item->nama }}</h3>
                <p>{{ $item->deskripsi }}</p>

                <div class="actions">
                    <a href="{{ route('admin.destinasi.edit', $item) }}">Edit</a>
                    <form action="{{ route('admin.destinasi.destroy', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus destinasi ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

</body>
</html>
