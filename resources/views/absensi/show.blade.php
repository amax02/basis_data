<!-- Menampilkan detail absensi -->
<h1>Detail Absensi</h1>
<p>Siswa: {{ $absensi->siswa->nama }}</p>
<p>Tanggal: {{ $absensi->tanggal }}</p>
<p>Status Kehadiran: {{ $absensi->status_kehadiran }}</p>
<p>Keterangan: {{ $absensi->keterangan }}</p>
