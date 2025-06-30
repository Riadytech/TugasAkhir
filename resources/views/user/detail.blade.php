<!DOCTYPE html>
<html>
<head>
    <title>Detail Destinasi</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 2rem;
        }
        .container {
            background: white;
            border-radius: 10px;
            max-width: 800px;
            margin: auto;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 1rem;
        }
        h1 {
            margin: 0;
            color: #2c3e50;
        }
        p {
            color: #555;
            line-height: 1.6;
        }
        .back {
            margin-top: 1rem;
            display: inline-block;
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ Storage::url($destinasi->gambar) }}" alt="{{ $destinasi->nama_destinasi }}">
        <h1>{{ $destinasi->nama_destinasi }}</h1>
        <p><strong>Alamat:</strong> {{ $destinasi->alamat }}</p>
        <p>{{ $destinasi->deskripsi }}</p>
        <a href="{{ route('user.dashboard') }}" class="back">← Kembali ke Dashboard</a>
    </div>
</body>
</html>
