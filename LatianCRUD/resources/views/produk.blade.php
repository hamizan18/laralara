<h1>Tambah Produk</h1>

<form action="/produk/simpan" method="POST">
    @csrf
    <label>Nama Produk: </label><br>
    <input type="text" name="nama"><br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga"><br><br>

    <button type="submit">Simpan</button>
</form>