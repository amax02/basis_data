<!-- Menampilkan daftar guru -->
<h1>Daftar Guru</h1>
<a href="{{ route('guru.create') }}">Tambah Guru</a>
@foreach($gurus as $guru)
    <p>{{ $guru->nama }}, Mata Pelajaran: {{ $guru->mata_pelajaran }} <a href="{{ route('guru.edit', $guru->id) }}">Edit</a> | <a href="{{ route('guru.show', $guru->id) }}">Detail</a></p>
@endforeach
