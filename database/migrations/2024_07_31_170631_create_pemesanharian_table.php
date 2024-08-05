<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanharianTable extends Migration
{
    public function up()
    {
        Schema::create('pemesanharian', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan');
            $table->date('tgl_pesanan');
            $table->date('tgl_pengembalian');
            $table->integer('jumlah_mobil');
            $table->decimal('pembayaran', 10, 2);
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanharian');
    }
}
