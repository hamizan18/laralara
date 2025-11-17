@extends('layouts.app')
@section('content')

<title>Data Mahasigma</title>

<a href="{{ route('form') }}">Back to Form</a>
<center>
    <h2>Daftar Nama Mahasigma</h2>
</center>

@foreach($mahasiswa as $mhs)
<ul>No. {{ $mhs->id }}
    <li>
        <p>Nama: {{ $mhs->nama }}</p>
        <p>NIM: {{ $mhs->nim }}</p>
        <p>Jurusan: {{ $mhs->jurusan }}</p>
    </li>
</ul>
<hr>
@endforeach
<br>
<a href="/dashboard">Kembali ke dashboard</a>

@endsection