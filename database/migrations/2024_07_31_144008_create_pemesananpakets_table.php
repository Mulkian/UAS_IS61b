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
        Schema::create('pemesananpakets', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan');
            $table->string('Tgl_pengembalian');
            $table->string('tgl_pesanan');

            $table->string('paket_dipilih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesananpakets');
    }
};
