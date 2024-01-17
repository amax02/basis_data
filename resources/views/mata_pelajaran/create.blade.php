<!-- Formulir tambah mata pelajaran -->
<h1>Tambah Mata Pelajaran</h1>
<form action="{{ route('mata-pelajaran.store') }}" method="POST">
    @csrf
    <label for="nama">Nama Mata Pelajaran:</label>
    <input type="text" name="nama" required>
    <label for="tingkat_kelas">Tingkat Kelas:</label>
    <input type="text" name="tingkat_kelas" required>
    <button type="submit">Tambah Mata Pelajaran</button>
</form>
