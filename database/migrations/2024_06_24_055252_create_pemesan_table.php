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
        Schema::create('pemesan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pemesan',20)->unique();
            $table->string('nama_pemesan',100);
            $table->string('hp_pemesan',50);
            $table->string('alamat_pemesan',100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesan');
    }
};
