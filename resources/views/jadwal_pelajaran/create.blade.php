<!-- Formulir tambah jadwal pelajaran -->
<h1>Tambah Jadwal Pelajaran</h1>
<form action="{{ route('jadwal-pelajaran.store') }}" method="POST">
    @csrf
    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" required>
    <label for="hari">Hari:</label>
    <input type="text" name="hari" required>
    <label for="jam_mulai">Jam Mulai:</label>
    <input type="time" name="jam_mulai" required>
    <label for="jam_selesai">Jam Selesai:</label>
    <input type="time" name="jam_selesai" required>
    <label for="guru_id">Guru:</label>
    <select name="guru_id">
        @foreach($gurus as $guru)
            <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
        @endforeach
    </select>
    <label for="mata_pelajaran_id">Mata Pelajaran:</label>
    <select name="mata_pelajaran_id">
        @foreach($mata_pelajarans as $mata_pelajaran)
            <option value="{{ $mata_pelajaran->id }}">{{ $mata_pelajaran->nama }}</option>
        @endforeach
    </select>
    <button type="submit">Tambah Jadwal Pelajaran</button>
</form>
