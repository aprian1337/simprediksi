<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pendistribusian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendistribusian', function (Blueprint $table) {
            $table->increments('id_distribusi');
            $table->integer('id_bantuan')->unsigned();
            $table->foreign('id_bantuan')
                ->references('id_bantuan')
                ->on('bantuan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('id_kebencanaan')->unsigned();
            $table->foreign('id_kebencanaan')
                ->references('id_kebencanaan')
                ->on('kebencanaan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('tanggal');
            $table->string('nama_distributor', 50);
            $table->string('tujuan_lokasi', 200);
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
        Schema::dropIfExists('pendistribusian');
    }
}
