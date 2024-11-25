<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penerimaan_dana', function (Blueprint $table) {
            $table->id();
            $table->string('sumber_dana', 100);
            $table->timestamp('tanggal')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('jumlah', 15, 2); 
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
