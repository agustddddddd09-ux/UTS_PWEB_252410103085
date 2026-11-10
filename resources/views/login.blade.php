@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="container">
    <h1>Taskly</h1>
    <h2>Selamat Datang!</h2>

    <p>Silakan masukkan username untuk melanjutkan.</p>

    <form action="/dashboard" method="GET">
        <label>Username</label>

        <input
            type="text"
            name="username"
            placeholder="Masukkan username"
            required
        >

        <button type="submit">Login</button>
    </form>
</div>

@endsection
