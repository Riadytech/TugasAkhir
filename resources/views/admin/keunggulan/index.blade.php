<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Keunggulan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      padding-top: 40px;
    }
    .card-keunggulan {
      background: #fff;
      border: 1px solid #dee2e6;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      padding: 20px;
      transition: 0.3s;
    }
    .card-keunggulan:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
    }
    .card-keunggulan img {
      width: 48px;
      height: 48px;
      object-fit: contain;
      margin-bottom: 10px;
    }
    .card-keunggulan h5 {
      font-weight: bold;
      color: #343a40;
    }
    .card-keunggulan p {
      color: #6c757d;
    }
    .action-buttons {
      margin-top: 15px;
    }
    .action-buttons a,
    .action-buttons form {
      display: inline-block;
    }
  </style>
</head>
<body>
<div class="container">
  <a href="/admin/dashboard" class="btn btn-secondary mb-4">← Kembali ke Dashboard</a>
  <h2 class="mb-4">Daftar Keunggulan</h2>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="row">
    @foreach($keunggulan as $item)
      <div class="col-md-6 mb-4">
        <div class="card-keunggulan">
          <img src="{{ $item->gambar_icon }}" alt="icon">
          <h5>{{ $item->judul }}</h5>
          <p>{{ $item->deskripsi }}</p>

          <div class="action-buttons">
            <a href="{{ route('admin.keunggulan.show', $item->id) }}" class="btn btn-sm btn-primary">🔍 Lihat Detail</a>
            <form action="{{ route('admin.keunggulan.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus keunggulan ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">🗑 Hapus</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</body>
</html>
