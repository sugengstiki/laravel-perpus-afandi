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
        Schema::create('anggota', function (Blueprint $table) {
            //['id_anggota','nim','nama_anggota','prodi','hp'];
            $table->id('id_anggota');
            $table->string('nim', 10)->unique();
            $table->string('nama_anggota', 100);
            $table->string('prodi', 100);
            $table->string('hp', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
