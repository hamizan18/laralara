<h2>Masukkan data</h2>

<form action="/produk" method="POST">
    @csrf
    <label>Nama Produk: </label><br>
    <input type="text" name="name"><br><br>

    <label>Harga: </label><br>
    <input type="number" name="price"><br><br>

    <label>Deskripsi: </label><br>
    <textarea name="deskripsi"></textarea><br>

    <button type="submit">Save</button>
</form>