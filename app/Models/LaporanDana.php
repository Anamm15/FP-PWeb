<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanDana extends Model
{
    use HasFactory;

    protected $table = 'laporan_dana';

    protected $fillable = [
        'periode',
        'total_penerimaan',
        'total_pengeluaran',
        'saldo',
        'keterangan',
    ];
}
