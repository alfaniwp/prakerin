<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('login-register.register');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'noinduk_siswa' => 'nullable',
            'kelas' => 'nullable',
            'Alamat' => 'required',
            'level' => 'required',
            'noinduk_guru' => 'nullable',
            'email' => 'required',
            'asal_sekolah' => 'nullable',
            'tempat_prakerin' => 'nullable',
            'pimpinan_dudi' => 'nullable',
            'pembimbing_dudi' => 'nullable',
            'bidang_usaha' => 'nullable',
            'nama_guru' => 'nullable',
            'telepon' => 'required',
            'password' => 'required',
            'jabatan' => 'nullable',
            'image' => 'image|file|max:4096',
            'alamat_sekolah' => 'nullable',
            'telepon_sekolah' => 'nullable',
            'email_sekolah' => 'nullable'
        ]);
        
        $img_path = "img/undraw_profile.smg";
        if($request->hasFile('image')) {
            $image = $request->image;
            $image_name = time() . $image->getClientOriginalName();

            $image->move('upload/profile-pic/' , $image_name);
            $img_path = 'upload/profile-pic/' . $image_name;
        }

        $validatedData['image'] = $img_path;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('login');
    }
}



// $validatedData = $request->validate([
//     'name' => 'required',
//     'no_induk' => 'required|unique:users',
//     'sekolah' => 'max:255',
//     'image' => 'image|file|max:4096',
//     'role' => 'required',
//     'password' => 'required'
// ]);

// if (preg_match("/P/i", $validatedData['no_induk'])) {
//     $validatedData['role'] = 'Perusahaan';
// }
// $img_path = "img/undraw_profile.svg";
// if ($request->hasFile('image')) {
//     $image = $request->image;
//     $image_name = time() . $image->getClientOriginalName();

//     $image->move('upload/profile-pic', $image_name);
//     $img_path = 'upload/profile-pic' . $image_name;
// }

// $validatedData['image'] = $img_path;
// $validatedData['password'] = Hash::make($validatedData['password']);

// User::create($validatedData);
// return redirect('login');
