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
        Schema::create('jenismobil', function (Blueprint $table) {
            $table->id();

            $table->string('tipe_mobil');
            $table->string('tahun_mobil');
            $table->string('warna_mobil');
            $table->string('plat_nomor');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenismobil');
    }
};
