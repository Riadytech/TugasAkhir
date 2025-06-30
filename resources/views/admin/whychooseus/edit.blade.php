<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Why Choose Us</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            background: #fff;
            padding: 30px;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            border-radius: 8px;
        }

        h2 {
            color: #2980b9;
            margin-bottom: 20px;
            text-align: center;
        }
        .kembali-btn{
            display: inline-block;
            padding: 10px 20px;
            background-color: blue;
            color: #f4f4f4;
            border-radius: 6px;
            text-decoration: none;


        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type=text],
        textarea,
        input[type=file] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background: #2980b9;
            color: white;
            border: none;
            padding: 12px 24px;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #1f6391;
        }

        img.preview {
            margin-top: 10px;
            max-width: 200px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Edit Halaman Why Choose Us</h2>

    <a href="{{ route('admin.dashboard') }}" class="btn-secondary kembali-btn">Kembali ke Dashboard</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('admin.wcu.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Judul</label>
        <input type="text" name="judul" value="{{ $wcu->judul ?? '' }}">

        <label>Poin (pisahkan dengan ENTER)</label>
        <textarea name="poin" rows="4">{{ $wcu->poin ?? '' }}</textarea>

        <label>Deskripsi</label>
        <textarea name="deskripsi" rows="5">{{ $wcu->deskripsi ?? '' }}</textarea>

        <label>Gambar (opsional)</label>
        <input type="file" name="gambar">
        @if($wcu && $wcu->gambar)
            <img class="preview" src="{{ asset('storage/' . $wcu->gambar) }}" alt="Gambar Saat Ini">
        @endif

        <button type="submit">Simpan Perubahan</button>
    </form>
</div>
</body>
</html>
