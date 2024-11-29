<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function getPengurus (Request $request) {
        try {
            $pengurus = Pengurus::all();
            return response()->json($pengurus);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function getPengurusById (Request $request) {
        try {
            $pengurus = Pengurus::find($request->id);
            return response()->json($pengurus);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function tambahPengurus (Request $request) {
        try {
            $warga_id = $request->warga_id;
            $jabatan = $request->jabatan;
            $email = $request->email;
            $hashedPassword = bcrypt(value: $request->password);
            $pengurus = new Pengurus();
            $pengurus->warga_id = $warga_id;
            $pengurus->jabatan = $jabatan;
            $pengurus->email = $email;
            $pengurus->password = $hashedPassword;
            $pengurus->save();
            return response()->json($pengurus, 200);
        } catch (\Throwable $th) {
            return response()->json("Internal Server Error: {$th->getMessage()}", 500);
        }
    }

    public function login (Request $request) {

    }

    public function logout (Request $request) {

    }

    public function updatePengurus(Request $request)
    {
        try {
            $id = $request->id;
            $jabatan = $request->jabatan;
            $email = $request->email;
            $is_active = $request->is_active;
            $cookies = $request->cookies;

            $pengurus = Pengurus::findOrFail($id);

            $pengurus->jabatan = $jabatan ?? $pengurus->jabatan;
            $pengurus->email = $email ?? $pengurus->email;
            $pengurus->is_active = $is_active ?? $pengurus->is_active;
            $pengurus->cookies = $cookies ?? $pengurus->cookies;

            $pengurus->save();

            return response()->json([
                'message' => 'Pengurus berhasil diupdate',
                'pengurus' => $pengurus,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Internal Server Error',
                'error' => $th->getMessage(),
            ], 500);
        }
    }


    public function deletePengurus (Request $request) {
        try {
            $pengurus = Pengurus::findOrFail($request->id);
            $pengurus->delete();
    
            return response()->json([
                'message' => 'Pengurus deleted successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Internal Server Error',
                'error' => $th->getMessage(),
            ], 500);
        }
    }

}
