<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\Peserta;
use App\Models\Mahasiswa;
use App\Models\Dosen;
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
        if ($request->tujuan == "Surat Tugas"){
        $suratmasuk = SuratMasuk::create([
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
        } elseif ($request->tujuan == "Berita Acara"){
            $suratmasuk = SuratMasuk::create([
                'tujuan'=>$request->tujuan,
                'tgl_kegiatan'=>$request->tgl_kegiatan,
                'keterangan'=>$request->nama_kegiatan,
                'nama_kegiatan'=>$request->nama_kegiatan,
                'tema_kegiatan'=>$request->tema_kegiatan,
                'pembicara_tamu'=>$request->pembicara_tamu,
                'mitra'=>$request->mitra,
                'diikuti'=>$request->diikuti,
                'alamat_mitra'=>$request->alamat_mitra,
                'peserta'=>$request->peserta,
                'username'=>$request->username,
                'nama'=>$request->name,
                'levels'=>$request->levels
            ]);
        } elseif ($request->tujuan == "Surat Izin KP"){
            $suratmasuk = SuratMasuk::create([
                'tujuan'=>$request->tujuan,
                'telp_pembuat'=>$request->telp_pembuat,
                'email_pembuat'=>$request->email_pembuat,
                'mitra'=>$request->mitra,
                'alamat_mitra'=>$request->alamat_mitra,
                'tlp_mitra'=>$request->tlp_mitra,
                'tgl_kegiatan'=>$request->tgl_kegiatan,
                'tgl_selesai'=>$request->tgl_selesai,
                'keterangan'=>$request->keterangan,
                'peserta'=>$request->peserta,
                'username'=>$request->username,
                'nama'=>$request->name,
                'levels'=>$request->levels
            ]);
        } elseif ($request->tujuan == "Surat Keterangan Aktif"){
            $suratmasuk = SuratMasuk::create([
                'tujuan'=>$request->tujuan,
                'mitra'=>$request->name,
                'alamat_mitra'=>$request->alamat_mitra,
                'keterangan'=>$request->keterangan,
                'tpt_lahir'=>$request->tpt_lahir,
                'tgl_kegiatan'=>$request->tgl_kegiatan,
                'username'=>$request->username,
                'nama'=>$request->name,
                'levels'=>$request->levels
            ]);
        } else{
            $suratmasuk = SuratMasuk::create([
                'tujuan'=>$request->tujuan,
                'mitra'=>$request->mitra,
                'alamat_mitra'=>$request->alamat_mitra,
                'keterangan'=>$request->keterangan,
                'pembicara_tamu'=>$request->pembicara_tamu,
                'jabatan'=>$request->jabatan,
                'tema_kegiatan'=>$request->tema_kegiatan,
                'nama_kegiatan'=>$request->nama_kegiatan,
                'tgl_kegiatan'=>$request->tgl_kegiatan,
                'waktu'=>$request->waktu,
                'username'=>$request->username,
                'nama'=>$request->name,
                'levels'=>$request->levels
            ]);
        }
        $id = $suratmasuk->id;
        SuratKeluar::create(['status'=>NULL]);
        if ($request->peserta == 'Y' && auth()->user()->levels != 'admin' ){
            return $this->viewpeserta($id);
            return view('peserta');
        } else if($request->peserta == NULL && auth()->user()->levels != 'admin' ){
            return redirect('surat')->with('toast_success', 'Record berhasil disimpan!');
        }else
            return redirect('suratadmin')->with('toast_success', 'Record berhasil disimpan!');
    }

    public function storeadmin(Request $request)
    {
        $mahasiswa = Mahasiswa::where('nim', $request->username)->get();
        $dosen = Dosen::where('nid', $request->username)->get();
        $md = substr($request->username, 0, -6);
        if ($md == "72"){
            $suratmasuk = SuratMasuk::create([
                'tujuan'=>$request->tujuan,
                'mitra'=>$request->mitra,
                'alamat_mitra'=>$request->alamat_mitra,
                'keterangan'=>$request->keterangan,
                'peserta'=>$request->peserta,
                'tgl_kegiatan'=>$request->tgl_kegiatan,
                'username'=>$request->username,
                'nama'=>$mahasiswa[0]->nama,
                'levels'=>'mahasiswa'
            ]);
        } else {
            if ($request->tujuan == "Surat Tugas"){
                $suratmasuk = SuratMasuk::create([
                'tujuan'=>$request->tujuan,
                'mitra'=>$request->mitra,
                'alamat_mitra'=>$request->alamat_mitra,
                'keterangan'=>$request->keterangan,
                'peserta'=>$request->peserta,
                'tgl_kegiatan'=>$request->tgl_kegiatan,
                'username'=>$request->username,
                'nama'=>$dosen[0]->nama,
                'levels'=>'dosen'
            ]);}
        $id = $suratmasuk->id;
        SuratKeluar::create(['status'=>NULL]); 
        }
        if ($request->peserta == 'Y' && auth()->user()->levels != 'admin' ){
            return $this->viewpeserta($id);
            return view('peserta');
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
        if(Mahasiswa::where('nim', $request->id_peserta )->exists()){
            if (count($request->id_peserta) > 0){
                foreach ($data['id_peserta'] as $item => $value){
                    $data2 = array(
                        'id_surat' => $surat->id,
                        'id_peserta' => $data['id_peserta'][$item]
                    );
                    Peserta::create($data2);
                }
            }
        $surat->update(array('peserta' => 'E'));
        return redirect('surat')->with('toast_success', 'Record berhasil diupdate!');
        } else{
            Alert::error('NID/NIM tidak ada!', 'Silahkan periksa kembali.');
            return redirect('surat');
        }
    }

    public function viewupdatepeserta($id)
    {
        $surat = SuratMasuk::findorfail($id);
        $id_surat = $surat->id;
        $peserta = Peserta::join('mahasiswa', 'peserta.id_peserta', '=', 'mahasiswa.nim')
            ->where('id_surat', $id_surat)
            ->get(['peserta.*', 'mahasiswa.nama']);
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
