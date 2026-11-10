<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');

        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
{
    $username = $request->query('username');

    $daftarTugas = [
        'Mengerjakan tugas kuliah',
        'Belajar Laravel',
        'Membuat laporan praktikum',
        'Mempersiapkan UTS'
    ];

    return view('pengelolaan', compact('username', 'daftarTugas'));
}
}
