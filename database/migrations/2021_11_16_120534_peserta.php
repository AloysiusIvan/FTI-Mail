<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->bigInteger('id_surat')->unsigned()->nullable();
            $table->string('id_peserta')->nullable();
            $table->string('nama_peserta')->nullable();
            $table->timestamps();
            $table->foreign('id_surat')->references('id')->on('surat_masuk')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
