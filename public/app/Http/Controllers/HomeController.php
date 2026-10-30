<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Halaman Beranda
    public function index()
    {
        return view('home');
    }

    // Halaman Tentang Wisata
    public function tentang()
    {
        return view('tentang');
    }
}
