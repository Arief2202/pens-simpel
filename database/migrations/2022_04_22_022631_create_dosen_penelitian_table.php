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
        Schema::create('dosen_penelitian', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dosen_id')->unsigned();
            $table->bigInteger('penelitian_id')->unsigned();
            $table->timestamps();
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade');
            $table->foreign('penelitian_id')->references('id')->on('penelitians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen_penelitian');
    }
};
