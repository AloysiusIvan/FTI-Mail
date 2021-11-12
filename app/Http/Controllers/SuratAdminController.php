<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SuratAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')
            ->where('status', NULL)
            ->get(['surat_masuk.*', 'surat_keluar.status', 'surat_keluar.kode_surat', 'surat_keluar.tanda_tangan'])->sortBy('created_at');
        return view('suratadmin', compact('surat'));
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
    public function store(Request $request, $id)
    {
        $surat = SuratKeluar::findorfail($id);
        $surat->update($request->all());
        $surat->update(array('status' => 'Proses'));
        return redirect('suratadmin')->with('toast_success', 'Record berhasil diupdate!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat = SuratKeluar::findorfail($id);
        $surat->update(array('status' => 'Ditolak'));
        return redirect('suratadmin')->with('toast_success', 'Record berhasil diupdate!');
    }
}
