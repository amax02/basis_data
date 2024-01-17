<!-- Menampilkan daftar mata pelajaran -->
<h1>Daftar Mata Pelajaran</h1>
<a href="{{ route('mata-pelajaran.create') }}">Tambah Mata Pelajaran</a>
@foreach($mata_pelajarans as $mata_pelajaran)
    <p>{{ $mata_pelajaran->nama }} (Tingkat Kelas: {{ $mata_pelajaran->tingkat_kelas }})</p>
@endforeach
