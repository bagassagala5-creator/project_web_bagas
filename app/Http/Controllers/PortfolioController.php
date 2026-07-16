<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profil()
    {
        $nama = "Bagas Imanuel Sagala";
        $npm = "238160082";

        return view('profil', compact('nama', 'npm'));
    }

    public function pendidikan()
    {
        $kampus = "Universitas Medan Area";
        $prodi = "Teknik Informatika";

        return view('pendidikan', compact('kampus', 'prodi'));
    }

    public function keahlian()
    {
        $skill = [
            "PHP",
            "Laravel"
        ];

        return view('keahlian', compact('skill'));
    }
}