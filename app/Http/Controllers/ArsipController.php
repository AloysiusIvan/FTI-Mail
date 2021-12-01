<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\Peserta;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class ArsipController extends Controller
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
            ->where([['username', $username], ['status', '!=', NULL]])
            ->get(['surat_masuk.*', 'surat_keluar.status'])->sortByDesc('updated_at');
        return view('arsip', compact('surat'));
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
    public function cetak($id)
    {
        $surat = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')
            ->where('surat_masuk.id', $id)
            ->get(['surat_masuk.*', 'status', 'kode_surat', 'tanda_tangan']);
        $id = auth()->user()->username;
        $tujuan = $surat[0]->tujuan;
        if ($tujuan == "Surat Tugas"){
            $peserta = $surat[0]->peserta;
            if ($peserta == "E"){
                $id_surat = $surat[0]->id;
                $peserta = Peserta::join('mahasiswa', 'peserta.id_peserta', '=', 'mahasiswa.nim')
                    ->where('id_surat', $id_surat)
                    ->get(['peserta.*', 'mahasiswa.nama']);
                $pdfin = PDF::loadView('template_surat.surat_tugas_peserta', compact('surat', 'peserta'));
                $pdfin->setPaper('A4', 'portrait');
                return $pdfin->stream('surat_tugas_'.$id.'.pdf');
            }
            $pdfin = PDF::loadView('template_surat.surat_tugas', compact('surat'));
            $pdfin->setPaper('A4', 'portrait');
            return $pdfin->stream('surat_tugas_'.$id.'.pdf');
        } elseif($tujuan == "Surat Izin KP"){
            $pdfin = PDF::loadView('template_surat.surat_kp', compact('surat'));
            $pdfin->setPaper('A4', 'portrait');
            return $pdfin->stream('surat_izin_kp_'.$id.'.pdf');
        } elseif($tujuan == "Berita Acara"){
            $pdfin = PDF::loadView('template_surat.berita_acara', compact('surat'));
            $pdfin->setPaper('A4', 'portrait');
            return $pdfin->stream('berita_acara_'.$id.'.pdf');
        } elseif($tujuan == "Surat Keterangan"){
            $pdfin = PDF::loadView('template_surat.surat_keterangan', compact('surat'));
            $pdfin->setPaper('A4', 'portrait');
            return $pdfin->stream('surat_keterangan.pdf');
        }
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
        //
    }
}
