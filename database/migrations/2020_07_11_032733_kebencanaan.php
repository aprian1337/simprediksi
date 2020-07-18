<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kebencanaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebencanaan', function (Blueprint $table) {
            $table->increments('id_kebencanaan');
            $table->integer('id_kokab')->unsigned();
            $table->foreign('id_kokab')
            ->references('id_kokab')
            ->on('kota_kabupaten')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')
            ->references('id_kecamatan')
            ->on('kecamatan')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->date('tanggal_kejadian');
            $table->string('kekuatan_gempa', 5);
            $table->string('jenis_kerusakan', 50)->nullable();
            $table->integer('jumlah_kerusakan')->nullable();
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
        Schema::dropIfExists('kebencanaan');
    }
}
