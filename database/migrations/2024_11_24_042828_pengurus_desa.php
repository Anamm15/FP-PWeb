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
        Schema::create('pengurus_desa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warga_id')->constrained('warga')->onDelete('cascade');
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->enum(column: 'jabatan', allowed: ['Kades', 'Sekretaris', 'Bendahara', 'Staff']); 
            $table->boolean('is_active')->default(true);
            $table->text('cookies')->nullable();
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
