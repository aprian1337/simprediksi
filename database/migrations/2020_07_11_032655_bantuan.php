<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bantuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantuan', function (Blueprint $table) {
            $table->increments('id_bantuan');
            $table->integer('id_donatur')->unsigned();
            $table->foreign('id_donatur')
            ->references('id_donatur')
            ->on('donatur')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('jenis_bantuan', 50)->nullable();
            $table->integer('jumlah_bantuan')->nullable();
            $table->string('satuan', 30)->nullable();
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
        Schema::dropIfExists('bantuan');
    }
}
