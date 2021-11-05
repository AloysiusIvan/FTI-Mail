<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = "surat_masuk";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tujuan', 'mitra', 'alamat_mitra', 'keterangan', 'username', 'nama', 'levels'
    ];
}