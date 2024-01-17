<!-- Formulir edit mata pelajaran -->
<h1>Edit Mata Pelajaran</h1>
<form action="{{ route('mata-pelajaran.update', $mata_pelajaran->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nama">Nama Mata Pelajaran:</label>
    <input type="text" name="nama" value="{{ $mata_pelajaran->nama }}" required>
    <label for="tingkat_kelas">Tingkat Kelas:</label>
    <input type="text" name="tingkat_kelas" value="{{ $mata_pelajaran->tingkat_kelas }}" required>
    <button type="submit">Perbarui Mata Pelajaran</button>
</form>
