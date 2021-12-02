<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\SuratMasuk;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $level = auth()->user()->levels;
        if ($level != "admin"){
            $username = auth()->user()->username;
            $surat19 = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('username', $username)->where('status', 'Selesai')->whereYear('surat_masuk.created_at', 2019)->get(); 
            $surat20 = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('username', $username)->where('status', 'Selesai')->whereYear('surat_masuk.created_at', 2020)->get();
            $surat21 = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('username', $username)->where('status', 'Selesai')->whereYear('surat_masuk.created_at', 2021)->get();

            $arsipA = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('username', $username)->where('status', 'Selesai')->where('kode_surat', 'A')->get(); 
            $arsipB = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('username', $username)->where('status', 'Selesai')->where('kode_surat', 'B')->get();
            $arsipC = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('username', $username)->where('status', 'Selesai')->where('kode_surat', 'C')->get();
            $arsipD = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('username', $username)->where('status', 'Selesai')->where('kode_surat', 'D')->get();
            $arsipE = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('username', $username)->where('status', 'Selesai')->where('kode_surat', 'E')->get();
                    
            $surat_count_19 = count($surat19);    	
            $surat_count_20 = count($surat20);
            $surat_count_21 = count($surat21);

            $surat_A = count($arsipA);
            $surat_B = count($arsipB);
            $surat_C = count($arsipC);
            $surat_D = count($arsipD);
            $surat_E = count($arsipE);
            
            return view('dashboard',compact('surat_count_19', 'surat_count_20','surat_count_21', 'surat_A', 'surat_B', 'surat_C', 'surat_D', 'surat_E'));
        } else{
            $surat19 = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('status', 'Selesai')->whereYear('surat_masuk.created_at', 2019)->get(); 
            $surat20 = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('status', 'Selesai')->whereYear('surat_masuk.created_at', 2020)->get();
            $surat21 = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('status', 'Selesai')->whereYear('surat_masuk.created_at', 2021)->get();

            $arsipA = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('status', 'Selesai')->where('kode_surat', 'A')->get(); 
            $arsipB = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('status', 'Selesai')->where('kode_surat', 'B')->get();
            $arsipC = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('status', 'Selesai')->where('kode_surat', 'C')->get();
            $arsipD = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('status', 'Selesai')->where('kode_surat', 'D')->get();
            $arsipE = SuratMasuk::join('surat_keluar', 'surat_masuk.id', '=', 'surat_keluar.id')->where('status', 'Selesai')->where('kode_surat', 'E')->get();
                    
            $surat_count_19 = count($surat19);    	
            $surat_count_20 = count($surat20);
            $surat_count_21 = count($surat21);

            $surat_A = count($arsipA);
            $surat_B = count($arsipB);
            $surat_C = count($arsipC);
            $surat_D = count($arsipD);
            $surat_E = count($arsipE);
            
            return view('dashboard',compact('surat_count_19', 'surat_count_20','surat_count_21', 'surat_A', 'surat_B', 'surat_C', 'surat_D', 'surat_E'));
        }
    }
}
