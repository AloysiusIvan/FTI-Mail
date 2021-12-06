<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\SuratJadi;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Novay\WordTemplate\Facade\WordTemplate;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')
            ->where('status', '!=', NULL)->where('status', '!=', 'Selesai')
            ->orderBy('surat_masuk.created_at','ASC')->paginate(5);
        return view('suratkeluar', compact('surat'));
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
        $surat = SuratKeluar::findorfail($id);
        $surat->update(array('status' => 'Selesai'));
        $id = $surat->id;
        SuratJadi::create(['id_suratjadi'=>$id]);
        return redirect('suratkeluar')->with('toast_success', 'Record berhasil diupdate!');
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
        $surat = SuratKeluar::findorfail($id);
        $surat->update($request->all());
        return redirect('suratkeluar')->with('toast_success', 'Record berhasil diupdate!');
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
        return redirect('suratkeluar')->with('toast_success', 'Record berhasil diupdate!');
    }
}
