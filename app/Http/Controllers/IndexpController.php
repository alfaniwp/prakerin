<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class IndexpController extends Controller
{
    public function index() {
        $siswa = User::Where('tempat_prakerin', Auth::user()->name)->count();
        return view('perusahaan.indexp', compact('siswa'));
    }

    public function profil() {
        return view('perusahaan.profil');
    }

    public function edit($id){
        $user = User::find($id);
        return view('perusahaan.edit-profil', compact('user'));
    }

    public function update(Request $request, $id) {
    $user = User::find($id);
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
        'nama_guru' => 'nullable',
        'telepon' => 'required',
        'password' => 'required',
        'jabatan' => 'nullable',
        'image' => 'image|max:4096'
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

    User::where('id', $user->id)->update($validatedData);
    return redirect('/profil')->with('success', 'edit data siswa berhasil!');
}
}
