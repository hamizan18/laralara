<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasigma</title>
</head>
<body>
    <h2>Data Mahasigma</h2>

    @foreach($mahasiswa as $mhs)
    <ul>
        <li>
            <p>Nama: {{ $mhs->nama }}</p>
            <p>NIM: {{ $mhs->nim }}</p>
            <p>Jurusan: {{ $mhs->jurusan }}</p>
            <hr>
        </li>
    </ul>
    @endforeach
</body>
</html>