<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function getLayanan (Request $request) {
        try {
            $layanan = Layanan::all();
            return response()->json($layanan, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function getLayananById (Request $request) {
        try {
            $layanan = Layanan::find($request->id);
            return response()->json($layanan, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function tambahLayanan (Request $request) {
        try {
            $nama_layanan = $request->nama_layanan;
            $deskripsi = $request->deskripsi;

            $layanan = new Layanan();
            $layanan->nama = $nama_layanan;
            $layanan->deskripsi = $deskripsi;
            $layanan->save();

            return response()->json("Layanan berhasil ditambahkan", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function updateLayanan (Request $request) {
        try {
            $nama_layanan = $request->input('nama_layanan');
            $deskripsi = $request->input('deskripsi');

            $layanan = Layanan::find($request->id);
            $layanan->nama = $nama_layanan;
            $layanan->deskripsi = $deskripsi;
            $layanan->save();

            return response()->json("Layanan berhasil diperbarui", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function deleteLayanan (Request $request) {
        try {
            $layanan = Layanan::find($request->id);
            $layanan->delete();
            return response()->json("Layanan berhasil dihapus", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }
}
