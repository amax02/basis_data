<!-- Formulir edit guru -->
<h1>Edit Guru</h1>
<form action="{{ route('guru.update', $guru->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="{{ $guru->nama }}" required>
    <label for="mata_pelajaran">Mata Pelajaran:</label>
    <input type="text" name="mata_pelajaran" value="{{ $guru->mata_pelajaran }}" required>
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" value="{{ $guru->tanggal_lahir }}" required>
    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" value="{{ $guru->alamat }}" required>
    <button type="submit">Perbarui Guru</button>
</form>
