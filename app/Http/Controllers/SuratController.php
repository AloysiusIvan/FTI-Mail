<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\Peserta;
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
            'peserta'=>$request->peserta,
            'tgl_kegiatan'=>$request->tgl_kegiatan,
            'username'=>$request->username,
            'nama'=>$request->name,
            'levels'=>$request->levels
        ]);
        SuratKeluar::create([
            'status'=>NULL
        ]);
        if ($request->peserta == 'Y' && auth()->user()->levels != 'admin' ){
            return redirect('surat')->with('info', 'Silahkan tambah peserta di bagian Action!');
        } else if($request->peserta == NULL && auth()->user()->levels != 'admin' ){
            return redirect('surat')->with('toast_success', 'Record berhasil disimpan!');
        }else
            return redirect('suratadmin')->with('toast_success', 'Record berhasil disimpan!');
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

    public function viewpeserta($id)
    {
        $surat = SuratMasuk::findorfail($id);
        return view('peserta', compact('surat'));
    }
    public function addpeserta(Request $request, $id)
    {
        $surat = SuratMasuk::findorfail($id);
        $data = $request->all();
        if (count($request->id_peserta) > 0){
            foreach ($data['id_peserta'] as $item => $value){
                $data2 = array(
                    'id_surat' => $surat->id,
                    'id_peserta' => $data['id_peserta'][$item],
                    'nama_peserta' => $data['nama_peserta'][$item]
                );
                Peserta::create($data2);
            }
        }
        $surat->update(array('peserta' => 'E'));
        return redirect('surat')->with('toast_success', 'Record berhasil diupdate!');
    }
    public function viewupdatepeserta($id)
    {
        $surat = SuratMasuk::findorfail($id);
        $id_surat = $surat->id;
        $peserta = Peserta::where('id_surat', $id_surat)->get();
        return view('updatepeserta', compact('peserta'));
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
