<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Korban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korban', function (Blueprint $table) {
            $table->increments('id_korban');
            $table->integer('id_kebencanaan')->unsigned();
            $table->foreign('id_kebencanaan')
            ->references('id_kebencanaan')
            ->on('kebencanaan')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('nama', 50);
            $table->string('jenis_korban', 100);
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
        Schema::dropIfExists('korban');
    }
}
