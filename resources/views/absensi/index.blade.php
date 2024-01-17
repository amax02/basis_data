<!-- Menampilkan daftar absensi -->
<h1>Daftar Absensi</h1>
<a href="{{ route('absensi.create') }}">Tambah Absensi</a>
@foreach($absensis as $absensi)
    <p>Siswa: {{ $absensi->siswa->nama }}, Tanggal: {{ $absensi->tanggal }}, Status: {{ $absensi->status_kehadiran }} <a href="{{ route('absensi.edit', $absensi->id) }}">Edit</a> | <a href="{{ route('absensi.show', $absensi->id) }}">Detail</a></p>
@endforeach
