<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo Laravel!</title>
</head>

<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <button action=route{'/produk'>Tambah data</button>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach($produk as $item)
        <li>{{ $item->nama }} - Rp {{ $item->harga }}</li>
        @endforeach
    </ul>
</body>

</html>