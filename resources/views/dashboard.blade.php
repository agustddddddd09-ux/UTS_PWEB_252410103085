@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container">
    <h1>Taskly</h1>

    <h2>Dashboard</h2>

    <p>Selamat datang, {{ $username }}!</p>

    <p>Ini adalah halaman utama aplikasi Taskly.</p>

    <a href="/profile?username={{ $username }}">
        Lihat Profile

    </a>
    <a href="/pengelolaan?username={{ $username }}">
    Kelola Tugas
</a>

</div>
@endsection
