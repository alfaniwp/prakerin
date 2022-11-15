<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexguruController extends Controller
{
    public function index() {
        return view('guru.indexg');
    }

    public function profil() {
        return view('guru.profil');
    }
}
