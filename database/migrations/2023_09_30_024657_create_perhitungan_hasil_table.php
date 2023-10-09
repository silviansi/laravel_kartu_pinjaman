<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungan_hasil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pinjaman_logs_id');
            $table->foreign('pinjaman_logs_id')->references('id')->on('pinjaman_logs');
            $table->unsignedBigInteger('laporan_pabrikasi_id');
            $table->foreign('laporan_pabrikasi_id')->references('id')->on('laporan_pabrikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perhitungan_hasil');
    }
};
