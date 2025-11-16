<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <h2>Input Data Mahasigma</h2>
    
    <form action="/mahasiswa" method="POST">
        @csrf
        <label>Nama: </label><br>
        <input type="text" name="nama"><br><br>
        
        <label">NIM: </label><br>
        <input type="string" name="nim"><br><br>
        
        <label>Jurusan: </label><br>
        <input type="text" name="jurusan"><br><br>
        
        <button type="submit">Save Data</button>
    </form>

</body>
</html>