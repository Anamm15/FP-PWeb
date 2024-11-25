<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';

    protected $fillable = [
        'nik',
        'nama',
        'umur',
        'alamat',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'status_perkawinan',
        'pekerjaan',
        'pendidikan_terakhir',
        'no_hp',
        'is_kepala_keluarga',
        'no_kk'
    ];

}
