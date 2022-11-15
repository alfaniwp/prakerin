<?php

namespace App\Http\Controllers;

use Auth;
use PDF;
use App\Models\Logbook;
use Illuminate\Http\Request;

class LaporanlogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.laporanlogbook', [
            'logbooks' => Logbook::where('nama', Auth::user()->name)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $logbook = Logbook::find($id);
        return view('siswa.edit-logbook', compact('logbook'));
        
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
        $logbook = Logbook::find($id);
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required',
            'image' => 'image|file|max:4096'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('logbook-images');
        }

        Logbook::where('id', $logbook->id)->update($validatedData);
        return redirect('/laporanlogbook')->with('success', 'edit logbook berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function exportpdf(){
        $logbooks = Logbook::where('nama', Auth::user()->name)->get();
        
        $pdf = PDF::loadview('siswa.PDF',['data' => $logbooks]);
        return $pdf->download('data.pdf');
    }
}
