<!-- Formulir tambah guru -->
<h1>Tambah Guru</h1>
<form action="{{ route('guru.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>
    <label for="mata_pelajaran">Mata Pelajaran:</label>
    <input type="text" name="mata_pelajaran" required>
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required>
    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" required>
    <button type="submit">Tambah Guru</button>
</form>
