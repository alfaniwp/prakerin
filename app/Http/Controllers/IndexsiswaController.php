<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexsiswaController extends Controller
{
    public function index() {
        return view('siswa.index');
    }

    public function profil() {
        return view('siswa.profil');
    }
}
