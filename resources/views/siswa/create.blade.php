<!-- Formulir tambah siswa -->
<h1>Tambah Siswa</h1>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>
    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" required>
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required>
    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" required>
    <button type="submit">Tambah Siswa</button>
</form>
