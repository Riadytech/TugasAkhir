<h1>Edit Destinasi Wisata</h1>

<form action="{{ route('admin.destinasi.update', $destinasi) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Nama Destinasi:</label>
    <input type="text" name="nama" value="{{ $destinasi->nama }}" required><br>

    <label>Deskripsi:</label>
    <textarea name="deskripsi" required>{{ $destinasi->deskripsi }}</textarea><br>

    <label>Lokasi:</label>
    <input type="text" name="lokasi" value="{{ $destinasi->lokasi }}" required><br>

    <label>Gambar:</label>
    <input type="file" name="gambar"><br>

    <button type="submit">Update</button>
</form>
