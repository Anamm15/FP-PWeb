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
        Schema::create('laporan_dana', function (Blueprint $table) {
            $table->id();
            $table->date('periode');
            $table->decimal('total_penerimaan', 15, 2);
            $table->decimal('total_pengeluaran', 15, 2);
            $table->decimal('saldo', 15, 2);
            $table->text('keterangan')->nullable();
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
