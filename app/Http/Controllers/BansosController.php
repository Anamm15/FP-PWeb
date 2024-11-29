<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBansos;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index () {
        $penerima_bansos = PenerimaBansos::with(['warga:id,nama,umur'])->get();
        return view('bansos', compact('penerima_bansos'));
    }

    public function searchNik(Request $request)
    {
        $nik = $request->input('nik');

        $penerima_bansos_by_nik = PenerimaBansos::whereHas('warga', function ($query) use ($nik) {
            $query->where('nik', 'like', "%{$nik}%");
        })->with(['warga:id,nama,umur'])->get();

        return view('bansos', compact(var_name: 'penerima_bansos_by_nik'));
    }
}
