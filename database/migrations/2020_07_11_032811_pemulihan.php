<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemulihan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemulihan', function (Blueprint $table) {
            $table->increments('id_pemulihan');
            $table->integer('id_kebencanaan')->unsigned();
            $table->foreign('id_kebencanaan')
            ->references('id_kebencanaan')
            ->on('kebencanaan')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->string('tindak_lanjut', 30)->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('pemulihan');
    }
}
