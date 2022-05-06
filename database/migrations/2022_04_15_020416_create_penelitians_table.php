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
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id');
            $table->foreignId('skema_id');
            $table->string('judul');
            $table->string('rumpun_ilmu');
            $table->text('abstrak');
            $table->string('keyword');
            $table->text('latar_belakang');
            $table->string('tujuan');
            $table->text('tinjau_pustaka');
            $table->text('metode');
            $table->text('daftar_pustaka');
            $table->string('lama_kgtn');
            $table->string('thn_pekerjaan');
            $table->string('grp_riset');
            $table->date('tanggal');
            $table->string('tahun');
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
        Schema::dropIfExists('penelitians');
    }
};
