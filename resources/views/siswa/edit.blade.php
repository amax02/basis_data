<!-- Formulir edit siswa -->
<h1>Edit Siswa</h1>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="{{ $siswa->nama }}" required>
    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" value="{{ $siswa->kelas }}" required>
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>
    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" value="{{ $siswa->alamat }}" required>
    <button type="submit">Perbarui Siswa</button>
</form>
