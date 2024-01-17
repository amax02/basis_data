<!-- Formulir tambah absensi -->
<h1>Tambah Absensi</h1>
<form action="{{ route('absensi.store') }}" method="POST">
    @csrf
    <label for="siswa_id">Siswa:</label>
    <select name="siswa_id">
        @foreach($siswas as $siswa)
            <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
        @endforeach
    </select>
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" required>
    <label for="status_kehadiran">Status Kehadiran:</label>
    <select name="status_kehadiran">
        <option value="Hadir">Hadir</option>
        <option value="Izin">Izin</option>
        <option value="Alpha">Alpha</option>
    </select>
    <label for="keterangan">Keterangan:</label>
    <input type="text" name="keterangan">
    <button type="submit">Tambah Absensi</button>
</form>
