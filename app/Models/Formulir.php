<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formulir extends Model
{
    use HasFactory;

    protected $table = 'formulir';

    protected $fillable = [
        'warga_id',
        'layanan_id',
        'status',
        'tanggal',
        'file',
        'keterangan'
    ];

    public function warga() {
        return $this->belongsTo(Warga::class);
    }

}
