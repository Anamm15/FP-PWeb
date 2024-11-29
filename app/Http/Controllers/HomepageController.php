<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBansos;
use App\Models\Warga;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $statistics = Warga::selectRaw('
                    COUNT(*) as jumlah_warga,
                    COUNT(CASE WHEN jenis_kelamin = "L" THEN 1 END) as jumlah_warga_laki_laki,
                    COUNT(CASE WHEN jenis_kelamin = "P" THEN 1 END) as jumlah_warga_perempuan,
                    COUNT(CASE WHEN is_kepala_keluarga = true THEN 1 END) as jumlah_kepala_keluarga,
                    AVG(umur) as rata_rata_umur
                ')
                ->first(); // Dapatkan satu hasil
        $statistics->rata_rata_umur = round($statistics->rata_rata_umur);
        $statistics->penerima_bansos = PenerimaBansos::count();

        return view('homepage', data: compact('statistics'));
    }
}
