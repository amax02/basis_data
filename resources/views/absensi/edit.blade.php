<!-- Formulir edit absensi -->
<h1>Edit Absensi</h1>
<form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="siswa_id">Siswa:</label>
    <select name="siswa_id">
        @foreach($siswas as $siswa)
            <option value="{{ $siswa->id }}" @if($siswa->id === $absensi->siswa_id) selected @endif>{{ $siswa->nama }}</option>
        @endforeach
    </select>
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" value="{{ $absensi->tanggal }}" required>
    <label for="status_kehadiran">Status Kehadiran:</label>
    <select name="status_kehadiran">
        <option value="Hadir" @if($absensi->status_kehadiran === 'Hadir') selected @endif>Hadir</option>
        <option value="Izin" @if($absensi->status_kehadiran === 'Izin') selected @endif>Izin</option>
        <option value="Alpha" @if($absensi->status_kehadiran === 'Alpha') selected @endif>Alpha</option>
    </select>
    <label for="keterangan">Keterangan:</label>
    <input type="text" name="keterangan" value="{{ $absensi->keterangan }}">
    <button type="submit">Perbarui Absensi</button>
</form>
