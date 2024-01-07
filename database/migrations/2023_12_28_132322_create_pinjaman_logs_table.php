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
        Schema::create('pinjaman_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profile');
            $table->date('tanggal');
            $table->string('no_bukti');
            $table->string('jumlah_pinjaman');
            $table->string('no_rek');
            $table->integer('total');
            $table->text('uraian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjaman_logs');
    }
};
