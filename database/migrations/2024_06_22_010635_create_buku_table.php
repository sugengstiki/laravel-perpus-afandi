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
        Schema::create('buku', function (Blueprint $table) {
            // ['id_buku','kode_buku','judul','pengarang','kategori'];
            $table->id('id_buku');
            $table->string('kode_buku', 10)->unique();
            $table->string('judul');
            $table->string('pengarang', 100);
            $table->string('kategori', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
