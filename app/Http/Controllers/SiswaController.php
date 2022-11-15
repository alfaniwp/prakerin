<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siswa', [
            'users' => User::where('asal_sekolah', Auth::user()->name)->get(),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return redirect('/siswa')->with('success', 'Tambah data siswa berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit-siswa', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
            'image' => 'image|max:4096',
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

        User::where('id', $user->id)->update($validatedData);
        return redirect('/siswa')->with('success', 'edit data siswa berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/siswa')->with('success', 'Data siswa berhasil dihapus!');
    }
}
