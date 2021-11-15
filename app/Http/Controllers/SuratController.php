<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = auth()->user()->username;
        $surat = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')
            ->where([['username', $username], ['status', NULL]])
            ->get(['surat_masuk.*', 'surat_keluar.status'])->sortByDesc('updated_at');
        return view('surat', compact('surat'));
        
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
        SuratMasuk::create([
            'tujuan'=>$request->tujuan,
            'mitra'=>$request->mitra,
            'alamat_mitra'=>$request->alamat_mitra,
            'keterangan'=>$request->keterangan,
            'username'=>$request->username,
            'nama'=>$request->name,
            'levels'=>$request->levels
        ]);
        SuratKeluar::create([
            'status'=>NULL
        ]);
        return redirect('surat')->with('toast_success', 'Record berhasil disimpan!');
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
    public function edit(Request $request, $id)
    {
        $surat = SuratMasuk::findorfail($id);
        $surat2 = SuratKeluar::findorfail($id);
        $surat->update($request->all());
        $surat2->update(array('status' => NULL));
        return redirect('surat')->with('toast_success', 'Record berhasil diupdate!');
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
        $surat = SuratMasuk::findorfail($id);
        $surat->update($request->all());
        return redirect('surat')->with('toast_success', 'Record berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat = SuratMasuk::findorfail($id);
        $surat->delete();
        return back()->with('toast_success', 'Record berhasil dihapus!');
    }
}
