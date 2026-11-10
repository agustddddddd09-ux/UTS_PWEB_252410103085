@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container">
    <h1>Taskly</h1>

    <h2>Halaman Profile</h2>

    <p>Username: {{ $username }}</p>

    <p>Selamat datang di halaman profile kamu!</p>

    <a href="/dashboard?username={{ $username }}">
        Kembali ke Dashboard
    </a>
</div>

@endsection
