<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin - Wisata</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f9fc;
      padding: 20px;
    }
    h2 {
      border-bottom: 2px solid #ddd;
      padding-bottom: 5px;
      margin-top: 40px;
    }
    form {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
    img.preview {
      margin-top: 10px;
      max-width: 200px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <h2>About Us</h2>
  <form action="/admin/about/update" method="POST" enctype="multipart/form-data">
    <label>Judul:</label>
    <input type="text" name="title">

    <label>Subjudul:</label>
    <input type="text" name="subtitle">

    <label>Background Image:</label>
    <input type="file" name="background_image">

    <label>About Image:</label>
    <input type="file" name="about_image">

    <label>Judul Konten 1:</label>
    <input type="text" name="judul_1">

    <label>Konten 1:</label>
    <textarea name="konten_1"></textarea>

    <label>Judul Konten 2:</label>
    <input type="text" name="judul_2">

    <label>Konten 2:</label>
    <textarea name="konten_2"></textarea>

    <label>Judul Konten 3:</label>
    <input type="text" name="judul_3">

    <label>Konten 3:</label>
    <textarea name="konten_3"></textarea>

    <button>Simpan About</button>
  </form>

  <h2>Why Choose Us</h2>
  <form action="/admin/whychoose/update" method="POST">
    <label>Judul:</label>
    <input type="text" name="judul">

    <label>Deskripsi:</label>
    <textarea name="deskripsi"></textarea>

    <button>Simpan Why Choose Us</button>
  </form>

  <h2>Social Media</h2>
  <form action="/admin/socialmedia/update" method="POST">
    <label>Link Instagram:</label>
    <input type="text" name="instagram">

    <label>Link TikTok:</label>
    <input type="text" name="tiktok">

    <button>Simpan Sosial Media</button>
  </form>

  <h2>Kontak</h2>
  <form action="/admin/contact/update" method="POST">
    <label>Contact Person:</label>
    <input type="text" name="contact_person">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Alamat:</label>
    <textarea name="alamat"></textarea>

    <button>Simpan Kontak</button>
  </form>

  <h2>Manajemen Wisata</h2>
  <form action="/admin/wisata/update" method="POST" enctype="multipart/form-data">
    <label>Nama Wisata:</label>
    <input type="text" name="nama_wisata">

    <label>Deskripsi Wisata:</label>
    <textarea name="deskripsi_wisata"></textarea>

    <label>Gambar Wisata:</label>
    <input type="file" name="gambar_wisata">

    <button>Simpan Wisata</button>
  </form>

  <h2>Berita & Informasi Wisata</h2>
  <form action="/admin/berita/update" method="POST" enctype="multipart/form-data">
    <label>Judul Berita:</label>
    <input type="text" name="judul_berita">

    <label>Konten Berita:</label>
    <textarea name="konten_berita"></textarea>

    <label>Gambar Berita:</label>
    <input type="file" name="gambar_berita">

    <button>Simpan Berita</button>
  </form>

</body>
</html>
