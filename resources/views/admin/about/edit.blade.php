<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Halaman About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fc;
        }

        .sidebar {
            width: 220px;
            background-color: #4e73df;
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover, .sidebar .active {
            background-color: #2e59d9;
            color: #fff;
        }

        .main-content {
            margin-left: 240px;
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .form-label {
            font-weight: 600;
        }

        img.preview {
            max-width: 150px;
            margin-top: 10px;
            border-radius: 6px;
        }

        .header {
            background-color: #fff;
            padding: 15px 30px;
            border-bottom: 1px solid #dee2e6;
            margin-left: 220px;
        }

        .header h4 {
            margin: 0;
            font-weight: 600;
            color: #4e73df;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h5 class="text-center mb-4">Website</h5>
        <a href="#">User</a>
        <a href="#" class="active">Module</a>
        <a href="#">Role</a>
        <a href="#">Menu</a>
        <a href="#">Assign Role</a>
        <a href="#">Setting Website</a>
        <a href="#">Layout Setting</a>
    </div>

    <!-- Header -->
    <div class="header">
        <h4>Edit Halaman About</h4>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="card p-4">
            <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul:</label>
                    <input type="text" name="title" class="form-control" value="{{ $about->title ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Subjudul:</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ $about->subtitle ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Background Image:</label>
                    <input type="file" name="background_image" class="form-control">
                    @if($about && $about->background_image)
                        <img src="{{ asset($about->background_image) }}" class="preview">
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">About Image:</label>
                    <input type="file" name="about_image" class="form-control">
                    @if($about && $about->about_image)
                        <img src="{{ asset($about->about_image) }}" class="preview">
                    @endif
                </div>

                <hr>

                <div class="mb-3">
                    <label class="form-label">Judul Konten 1:</label>
                    <input type="text" name="judul_1" class="form-control" value="{{ $about->judul_1 ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Konten 1:</label>
                    <textarea name="konten_1" class="form-control" rows="3">{{ $about->konten_1 ?? '' }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul Konten 2:</label>
                    <input type="text" name="judul_2" class="form-control" value="{{ $about->judul_2 ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Konten 2:</label>
                    <textarea name="konten_2" class="form-control" rows="3">{{ $about->konten_2 ?? '' }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul Konten 3:</label>
                    <input type="text" name="judul_3" class="form-control" value="{{ $about->judul_3 ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Konten 3:</label>
                    <textarea name="konten_3" class="form-control" rows="3">{{ $about->konten_3 ?? '' }}</textarea>
                </div>

                <button class="btn btn-success mt-2">💾 Simpan Perubahan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
