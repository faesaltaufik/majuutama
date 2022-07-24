<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/dashboard');
    }

    public function penggunaDaftar()
    {
        return view('pages/pengguna-daftar');
    }

    public function penggunaBaru()
    {
        return view('pages/pengguna-baru');
    }

    public function pinjamanBaru()
    {
        return view('pages/pinjaman-baru');
    }

    public function pinjamanDaftar()
    {
        return view('pages/pinjaman-daftar');
    }
}
