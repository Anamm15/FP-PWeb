<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBansos;
use Illuminate\Http\Request;

class PenerimaBansosController extends Controller
{
    public function tambahPenerimaBansos (Request $request) {
        try {
            $warga_id = $request->warga_id;
            $nama_bansos = $request->nama_bansos;
            $tanggal = $request->tanggal;
            $keterangan = $request->keterangan;

            $penerima_bansos = new PenerimaBansos();
            $penerima_bansos->warga_id = $warga_id;
            $penerima_bansos->nama_bansos = $nama_bansos;
            $penerima_bansos->tanggal = $tanggal;
            $penerima_bansos->keterangan = $keterangan;
            $penerima_bansos->save();
            return response()->json($penerima_bansos, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function getPenerimaBansos (Request $request) {
        try {
            $penerima_bansos = PenerimaBansos::all();
            return response()->json($penerima_bansos, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function getPenerimaBansosById (Request $request) {
        try {
            $penerima_bansos = PenerimaBansos::find($request->id);
            return response()->json($penerima_bansos, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function updatePenerimaBansos (Request $request) {
        try {
            $nama_bansos = $request->nama_bansos;
            $tanggal = $request->tanggal;
            $keterangan = $request->keterangan;

            $penerima_bansos = PenerimaBansos::find($request->id);

            $penerima_bansos->nama_bansos = $nama_bansos ?? $penerima_bansos->nama_bansos;
            $penerima_bansos->tanggal = $tanggal ?? $penerima_bansos->tanggal;
            $penerima_bansos->keterangan = $keterangan ?? $penerima_bansos->keterangan;

            $penerima_bansos->save();
            return response()->json("Penerima Bansos berhasil diperbarui", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function deletePenerimaBansos (Request $request) {
        try {
            $penerima_bansos = PenerimaBansos::find($request->id);
            $penerima_bansos->delete();
            return response()->json("Penerima Bansos berhasil dihapus", 200);            
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }
}
