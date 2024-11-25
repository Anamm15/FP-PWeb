<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus_desa';

    protected $fillable = [
        'warga_id',
        'email',
        'password',
        'jabatan',
        'is_active',
        'cookies',
    ];

    public function warga()
    {
        return $this->belongsTo(related: Warga::class);
    }
}
