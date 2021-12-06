<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\Peserta;
use App\Models\Dosen;
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
        $level = auth()->user()->levels;
        if ($level != "admin"){
            $surat = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')
                ->where([['username', $username], ['status', '!=', NULL]])
                ->orderBy('surat_masuk.updated_at','DESC')->paginate(5);
            return view('arsip', compact('surat'));
        } else{
            $surat = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->join('surat_jadi', 'surat_keluar.id', '=', 'surat_jadi.id_suratjadi')
                ->where('status', 'Selesai')->orderBy('surat_jadi.created_at','DESC')->paginate(5);
            return view('arsipadmin', compact('surat'));
        }
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
        $surat = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->join('surat_jadi', 'surat_keluar.id', '=', 'surat_jadi.id_suratjadi')
            ->where('surat_masuk.id', $id)
            ->get(['surat_masuk.*', 'status', 'kode_surat', 'tanda_tangan', 'surat_jadi.*']);
        $tugas = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')
            ->where('surat_masuk.id', $id)
            ->get(['surat_masuk.*', 'status', 'kode_surat', 'tanda_tangan']);
        $id = auth()->user()->username;
        $tujuan = $surat[0]->tujuan;
        $mitra = $surat[0]->mitra;
        if ($tujuan == "Surat Tugas"){
            $peserta = $surat[0]->peserta;
            if ($peserta == "E"){
                $id_surat = $tugas[0]->id;
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
        } elseif($tujuan == "Surat Keterangan Aktif"){
            $year = substr($surat[0]->username, 2, -4);
            $prod = substr($surat[0]->username, 0, -6);
            if($year == "19"){
                $tahun = "2019/2020";
            }
            if($prod == "72"){
                $prodi = "Sistem Informasi";
            }
            if ($surat[0]->levels == "mahasiswa"){
                $pdfin = PDF::loadView('template_surat.surat_keterangan_aktif', compact('surat', 'tahun', 'prodi'));
                $pdfin->setPaper('A4', 'portrait');
                return $pdfin->stream('surat_keterangan_'.$id.'.pdf');
            }else{
                $dosen = Dosen::where('nid', $surat[0]->username)->get('jabatan');
                $masuk = Dosen::where('nid', $surat[0]->username)->get('tgl_masuk');
                $pdfin = PDF::loadView('template_surat.surat_aktif_dosen', compact('surat', 'dosen', 'masuk'));
                $pdfin->setPaper('A4', 'portrait');
                return $pdfin->stream('surat_keterangan_'.$id.'.pdf');
            }
        } elseif ($tujuan == "Surat Undangan"){
            $pdfin = PDF::loadView('template_surat.surat_undangan', compact('surat'));
            $pdfin->setPaper('A4', 'portrait');
            return $pdfin->stream('surat_undangan_'.$mitra.'.pdf');
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
