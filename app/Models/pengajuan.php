<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan'; 

    protected $fillable = [
        'id', 'nama', 'telepon', 'jenis_asuransi', 'keterangan', 'file_ktp', 'file_dokumen_pendukung', 'file_bukti_asuransi'
    ];
}
