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
            $table->integer('dosen_id');
            $table->string('judul');
            $table->text('rumpun_ilmu');
            $table->text('abstrak');
            $table->text('keyword');
            $table->text('latar_belakang');
            $table->text('tujuan');
            $table->text('tinjau_pustaka');
            $table->text('metode');
            $table->text('daftar_pustaka')->nullable();
            $table->text('lama_kgtn');
            $table->text('thn_pekerjaan');
            $table->text('grp_riset');
            $table->date('tanggal')->nullable();
            $table->string('status')->default('menunggu');
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
