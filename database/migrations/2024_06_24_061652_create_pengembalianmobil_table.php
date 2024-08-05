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
        Schema::create('pengembalianmobil', function (Blueprint $table) {
            $table->id();
            $table->string('id_pesanan');
            $table->string('tgl_kembali');
             $table->string('ganti_rugi');
            $table->enum('status', ['berhasil', 'gagal'])->default('berhasil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalianmobil');
    }
};
