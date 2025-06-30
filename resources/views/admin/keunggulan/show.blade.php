<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Keunggulan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      max-width: 700px;
      margin-top: 60px;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.06);
    }

    .form-group label {
      font-weight: 600;
    }

    .btn-group {
      margin-top: 30px;
    }

    .icon-preview {
      width: 60px;
      height: 60px;
      object-fit: contain;
      display: block;
      margin-bottom: 15px;
    }

    .page-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 25px;
      color: #2c3e50;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="page-title">Edit Keunggulan</h2>

  <form action="{{ route('admin.keunggulan.update', $item->id) }}" method="POST">
    @csrf
    {{-- @method('PUT') Tambahkan method PUT agar sesuai RESTful --}}

    <div class="form-group text-center">
      <label>Preview Icon</label><br>
      <img src="{{ $item->gambar_icon }}" alt="Icon" class="icon-preview">
    </div>

    <div class="form-group">
      <label for="gambar_icon">Gambar Icon (URL)</label>
      <input type="text" name="gambar_icon" id="gambar_icon" value="{{ $item->gambar_icon }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" name="judul" id="judul" value="{{ $item->judul }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>{{ $item->deskripsi }}</textarea>
    </div>

    <div class="btn-group d-flex justify-content-between">
      <a href="{{ route('admin.keunggulan.index') }}" class="btn btn-secondary">← Kembali</a>
      <button type="submit" class="btn btn-success">💾 Simpan</button>
    </div>
  </form>
</div>

</body>
</html>
