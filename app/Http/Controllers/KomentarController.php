<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function tambahKomentar (Request $request) {
        try {
            $komen = $request->input('komentar');
            $pengumuman_id = $request->input('pengumuman_id');

            $komentar = new Komentar();
            $komentar->komentar = $komen;
            $komentar->pengumuman_id = $pengumuman_id;
            $komentar->save();

            return response()->json("Komentar berhasil ditambahkan", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }
    
    public function getKomentarByPengumumanId (Request $request) {
        try {
            $komentar = Komentar::where('pengumuman_id', $request->id)->get();
            return response()->json($komentar, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function updateKomentar (Request $request) {
        try {
            $komen = $request->input('komentar');

            $komentar = Komentar::find($request->id);
            $komentar->komentar = $komen;
            $komentar->save();

            return response()->json("Komentar berhasil diperbarui", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function deleteKomentar (Request $request) {
        try {
            $komentar = Komentar::find($request->id);
            $komentar->delete();

            return response()->json("Komentar berhasil dihapus", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }
}
