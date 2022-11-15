<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.perusahaan', [
            'users' => User::where('level', 'instansi')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-perusahaan');
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
            'kelas' => 'nullable',
            'Alamat' => 'required',
            'level' => 'required',
            'email' => 'required',
            'asal_sekolah' => 'nullable',
            'tempat_prakerin' => 'nullable',
            'bidang_usaha' => 'nullable',
            'nama_guru' => 'nullable',
            'telepon' => 'required',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/perusahaan')->with('success', 'Tambah data siswa berhasil!');
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
        return view('admin.edit-perusahaan', compact('user'));
        
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
            'kelas' => 'nullable',
            'Alamat' => 'required',
            'level' => 'required',
            'email' => 'required',
            'asal_sekolah' => 'nullable',
            'tempat_prakerin' => 'nullable',
            'nama_guru' => 'nullable',
            'telepon' => 'required',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/perusahaan')->with('success', 'edit data siswa berhasil!');
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
        return redirect('/perusahaan')->with('success', 'Data siswa berhasil dihapus!');
    }
}
