<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nik', 16)->unique();
            $table->integer('umur');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('pendidikan_terakhir', 50);
            $table->string('pekerjaan', 100, )->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->boolean('is_kepala_keluarga')->default(false);
            $table->string('no_kk', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
