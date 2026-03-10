<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 40px;
        }

        h1{
            text-align: center;
            color: #333;
        }

        table{
            border-collapse: collapse;
            width: 70%;
            margin: auto;
            background: white;
        }

        th, td{
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th{
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even){
            background-color: #f2f2f2;
        }

        tr:hover{
            background-color: #ddd;
        }
    </style>
</head>

<body>

<h1>Data Mata Kuliah</h1>

<table>
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

</body>
</html>