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
        Schema::create('peminjaman', function (Blueprint $table) {
            //['id_pinjam','id_petugas','id_anggota','id_buku'];
            $table->id('id_pinjam');
            $table->foreignId('id_petugas')->constrained('petugas', 'id_petugas');
            $table->foreignId('id_anggota')->constrained('anggota', 'id_anggota');
            $table->foreignId('id_buku')->constrained('buku', 'id_buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam');
    }
};
