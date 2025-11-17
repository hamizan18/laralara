@extends('layouts.app')
@section('content')

    <title>Form Input Data</title>

    <a href="/dashboard">Back to Dashboard</a>

    <center>
        <h2>Input Data Mahasigma</h2>
    </center>

    <form action="/mahasiswa" method="POST">
        @csrf
            <label>Nama: </label><br>
            <input type="text" name="nama" required><br><br>

            <label>NIM: </label><br>
            <input type="number" name="nim" required><br><br>

            <label>Jurusan: </label><br>
            <input type="text" name="jurusan" required><br><br>

            <button type="submit">Save Data</button>
    </form>

    @endsection