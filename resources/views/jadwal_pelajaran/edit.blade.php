<!-- Formulir edit jadwal pelajaran -->
<h1>Edit Jadwal Pelajaran</h1>
<form action="{{ route('jadwal-pelajaran.update', $jadwal_pelajaran->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" value="{{ $jadwal_pelajaran->kelas }}" required>
    <label for="hari">Hari:</label>
    <input type="text" name="hari" value="{{ $jadwal_pelajaran->hari }}" required>
    <label for="jam_mulai">Jam Mulai:</label>
    <input type="time" name="jam_mulai" value="{{ $jadwal_pelajaran->jam_mulai }}" required>
    <label for="jam_selesai">Jam Selesai:</label>
    <input type="time" name="jam_selesai" value="{{ $jadwal_pelajaran->jam_selesai }}" required>
    <label for="guru_id">Guru:</label>
    <select name="guru_id">
        @foreach($gurus as $guru)
            <option value="{{ $guru->id }}" @if($guru->id === $jadwal_pelajaran->guru_id) selected @endif>{{ $guru->nama }}</option>
        @endforeach
    </select>
    <label for="mata_pelajaran_id">Mata Pelajaran:</label>
    <select name="mata_pelajaran_id">
        @foreach($mata_pelajarans as $mata_pelajaran)
            <option value="{{ $mata_pelajaran->id }}" @if($mata_pelajaran->id === $jadwal_pelajaran->mata_pelajaran_id) selected @endif>{{ $mata_pelajaran->nama }}</option>
        @endforeach
    </select>
    <button type="submit">Perbarui Jadwal Pelajaran</button>
</form>
