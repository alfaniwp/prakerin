<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Auth;
use Illuminate\Http\Request;

class AbsensigController extends Controller
{
    public function index()
    {
        return view('guru.absensig', [
            'absensis' => Absensi::where('nama_guru', Auth::user()->name)->get()
        ]);
    }
}