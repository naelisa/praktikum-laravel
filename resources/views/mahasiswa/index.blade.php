<h1>Data Mata Kuliah</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Jurusan</th>
    </tr>

    @foreach($matkuls as $matkul)
    <tr>
        <td>{{ $matkul->id }}</td>
        <td>{{ $matkul->kode }}</td>
        <td>{{ $matkul->nama }}</td>
        <td>{{ $matkul->jurusan }}</td>
    </tr>
    @endforeach

</table>