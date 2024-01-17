<!-- Menampilkan daftar jadwal pelajaran -->
<h1>Daftar Jadwal Pelajaran</h1>
<a href="{{ route('jadwal-pelajaran.create') }}">Tambah Jadwal Pelajaran</a>
@foreach($jadwal_pelajarans as $jadwal_pelajaran)
    <p>Kelas: {{ $jadwal_pelajaran->kelas }}, Hari: {{ $jadwal_pelajaran->hari }}, Jam: {{ $jadwal_pelajaran->jam_mulai }} - {{ $jadwal_pelajaran->jam_selesai }} <a href="{{ route('jadwal-pelajaran.edit', $jadwal_pelajaran->id) }}">Edit</a> | <a href="{{ route('jadwal-pelajaran.show', $jadwal_pelajaran->id) }}">Detail</a></p>
@endforeach
