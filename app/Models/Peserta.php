<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = "peserta";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_surat', 'id_peserta', 'nama_peserta'
    ];
}
