@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')

<div class="container">
    <h1>Taskly</h1>

    <h2>Pengelolaan Tugas</h2>

    <p>Halo, {{ $username }}!</p>

    <h3>Daftar Tugas</h3>

    @include('partials.catatan')

    <ul>
        @foreach ($daftarTugas as $tugas)
            <li>{{ $tugas }}</li>
        @endforeach
    </ul>

    <a href="/dashboard?username={{ $username }}">
        Kembali ke Dashboard
    </a>
</div>

@endsection
