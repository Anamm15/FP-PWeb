<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenerimaanDana extends Model
{
    use HasFactory;

    protected $table = 'penerimaan_dana';

    protected $fillable = [
        'sumber_dana',
        'tanggal',
        'jumlah',
        'keterangan',
    ];
}
