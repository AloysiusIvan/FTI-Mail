<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = "surat_masuk";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tujuan', 'mitra', 'alamat_mitra', 'keterangan', 'peserta', 'id_peserta', 'nama_peserta', 'tgl_kegiatan', 'telp_pembuat', 'email_pembuat', 'tlp_mitra', 'tgl_selesai', 'nama_kegiatan', 'tema_kegiatan', 'pembicara_tamu', 'diikuti', 'tpt_lahir', 'waktu', 'jabatan', 'username', 'nama', 'levels'
    ];
    protected $casts = [
        'id_peserta' => 'array', 'nama_peserta' => 'array'
    ];

    protected $dates = ['tgl_kegiatan', 'tgl_selesai'];
}
