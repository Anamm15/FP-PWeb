<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function tambahPengumuman (Request $request) {
        try {
            $judul = $request->judul;
            $isi = $request->isi;
            $tanggal = $request->tanggal;
            $file = $request->file;

            $pengumuman = new Pengumuman();
            $pengumuman->judul = $judul;
            $pengumuman->isi = $isi;
            $pengumuman->tanggal = $tanggal;
            $pengumuman->file = $file;
            $pengumuman->save();

            return response()->json($pengumuman, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }
    
    public function getPengumuman (Request $request) {
        try {
            $pengumuman = Pengumuman::all();
            return response()->json($pengumuman, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function getPengumumanById (Request $request) {
        try {
            $pengumuman = Pengumuman::find($request->id);
            return response()->json($pengumuman, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function updatePengumuman (Request $request) {
        try {
            $judul = $request->judul;
            $isi = $request->isi;
            $tanggal = $request->tanggal;
            $file = $request->file;

            $pengumuman = Pengumuman::find($request->id);

            $pengumuman->judul = $judul ?? $pengumuman->judul; 
            $pengumuman->isi = $isi ?? $pengumuman->isi;
            $pengumuman->tanggal = $tanggal ?? $pengumuman->tanggal;
            $pengumuman->file = $file ?? $pengumuman->file;

            $pengumuman->save();
            return response()->json("Pengumuman berhasil diperbarui", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function deletePengumuman (Request $request) {
        try {
            $pengumuman = Pengumuman::find($request->id);
            $pengumuman->delete();
            return response()->json("Pengumuman berhasil dihapus", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }
}
