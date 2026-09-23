@extends('layouts.app')

@section('content')
    <div class="profile-header">
        <img src="{{ asset('images/foto.jpg') }}" alt="Foto Fandy">
        <h1>Fandy Miftakhul Zanuar</h1>
        <p class="tagline">Siswa RPL di SMK Negeri 1 Bantul, cita-cita menjadi psikiater.</p>
    </div>

    <div class="card-section">
        <h2>Proyek</h2>
        <ul>
            <li>Website Biodata Diri (HTML, CSS)</li>
            <li>Dashboard Login Sederhana (HTML, CSS)</li>
            <li>Aplikasi Laravel Pertama (PHP, Laravel)</li>
        </ul>
    </div>

    <div class="card-section">
        <h2>Keahlian</h2>
        <ul class="skill-badges">
            <li>HTML & CSS</li>
            <li>Dasar Linux & Terminal</li>
            <li>Dasar Laravel</li>
        </ul>
    </div>
@endsection