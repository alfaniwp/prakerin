<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sekolah;
use App\Models\Siswa;

class LoginController extends Controller
{
    public function index(){
        return view('login-register.login');
    }

    public function authenticate(Request $request){
        if (Auth::attempt($request->only('email','password'))) {
            
            return redirect('/index');
        };
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout() {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
