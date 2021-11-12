<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $table = "surat_keluar";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'status', 'kode_surat', 'tanda_tangan'
    ];
}
