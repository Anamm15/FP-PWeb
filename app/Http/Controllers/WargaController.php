<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBansos;
use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function getWarga (Request $request) {
        try {
            $warga = Warga::all();
            return response()->json($warga, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }
    
    public function getWargaByNIK (Request $request) {
        try {
            $warga = Warga::find($request->nik);
            return response()->json($warga, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function tambahWarga (Request $request) {
        try {
            $nama = $request->input('nama');
            $nik = $request->input('nik');
            $umur = $request->input('umur');
            $alamat = $request->input('alamat');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $agama = $request->input('agama');
            $tempat_lahir = $request->input('tempat_lahir');
            $tanggal_lahir = $request->input('tanggal_lahir');
            $status_perkawinan = $request->input('status_perkawinan');
            $pendidikan_terakhir = $request->input('pendidikan_terakhir');
            $pekerjaan = $request->input('pekerjaan');
            $no_hp = $request->input('no_hp');
            $is_kepala_keluarga = $request->input('is_kepala_keluarga');
            $no_kk = $request->input('no_kk');

            $warga = new Warga();
            $warga->nama = $nama;
            $warga->nik = $nik;
            $warga->umur = $umur;
            $warga->alamat = $alamat;
            $warga->jenis_kelamin = $jenis_kelamin;
            $warga->agama = $agama;
            $warga->tempat_lahir = $tempat_lahir;
            $warga->tanggal_lahir = $tanggal_lahir;
            $warga->status_perkawinan = $status_perkawinan;
            $warga->pendidikan_terakhir = $pendidikan_terakhir;
            $warga->pekerjaan = $pekerjaan;
            $warga->no_hp = $no_hp;
            $warga->is_kepala_keluarga = $is_kepala_keluarga;
            $warga->no_kk = $no_kk;
            $warga->save();
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function updateWarga (Request $request) {
        try {
            $nama = $request->input('nama');
            $nik = $request->input('nik');
            $umur = $request->input('umur');
            $alamat = $request->input('alamat');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $agama = $request->input('agama');
            $tempat_lahir = $request->input('tempat_lahir');
            $tanggal_lahir = $request->input('tanggal_lahir');
            $status_perkawinan = $request->input('status_perkawinan');
            $pendidikan_terakhir = $request->input('pendidikan_terakhir');
            $pekerjaan = $request->input('pekerjaan');
            $no_hp = $request->input('no_hp');
            $is_kepala_keluarga = $request->input('is_kepala_keluarga');
            $no_kk = $request->input('no_kk');

            $warga = Warga::find($request->nik);

            $warga->nama = $nama ?? $warga->nama;
            $warga->umur = $umur ?? $warga->umur;
            $warga->alamat = $alamat ?? $warga->alamat;
            $warga->jenis_kelamin = $jenis_kelamin ?? $warga->jenis_kelamin;
            $warga->agama = $agama ?? $warga->agama;
            $warga->tempat_lahir = $tempat_lahir ?? $warga->tempat_lahir;
            $warga->tanggal_lahir = $tanggal_lahir ?? $warga->tanggal_lahir;
            $warga->status_perkawinan = $status_perkawinan ?? $warga->status_perkawinan;
            $warga->pendidikan_terakhir = $pendidikan_terakhir ?? $warga->pendidikan_terakhir;
            $warga->pekerjaan = $pekerjaan ?? $warga->pekerjaan;
            $warga->no_hp = $no_hp ?? $warga->no_hp;
            $warga->is_kepala_keluarga = $is_kepala_keluarga ?? $warga->is_kepala_keluarga;
            $warga->no_kk = $no_kk ?? $warga->no_kk;
            $warga->save();
            return response()->json("Data warga berhasil diupdate", 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function deleteWarga (Request $request) {
        try {
            $warga = Warga::find($request->nik);
            $warga->delete();
            return response()->json($warga, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

}
