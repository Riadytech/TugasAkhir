<form action="{{ route('admin.destinasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nama Destinasi:</label><br>
    <input type="text" name="nama_destinasi"><br>

    <label>Deskripsi:</label><br>
    <textarea name="deskripsi"></textarea><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat"><br>

    <label>Latitude:</label><br>
    <input type="text" name="latitude"><br>

    <label>Longitude:</label><br>
    <input type="text" name="longitude"><br>

    <label>Gambar:</label><br>
    <input type="file" name="gambar"><br>

    <button type="submit">Simpan</button>
</form>
