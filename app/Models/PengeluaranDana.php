<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengeluaranDana extends Model
{
    use HasFactory;

    protected $table = 'pengeluaran_dana';
    
    protected $fillable = [
        'tanggal',
        'kategori',
        'jumlah',
        'keterangan',
    ];
}
