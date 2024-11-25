<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenerimaBansos extends Model
{
    use HasFactory;

    protected $table = 'bansos';

    protected $fillable = [
        'warga_id',
        'nama_bansos',
        'tanggal',
        'keterangan',
        'is_active'
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
