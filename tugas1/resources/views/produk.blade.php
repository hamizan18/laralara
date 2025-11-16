<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h2>The Data</h2>
    @foreach ($product as $p)
    <ul>
        <li>Nama barang: {{ $p->name }} - Harga: {{ $p->price }}<br>Deskripsi: <br>{{ $p->deskripsi }}</li>
    </ul>
    @endforeach
</body>
</html>