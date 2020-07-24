<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestaque extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destaque', function (Blueprint $table) {
            $table->id();
            $table->string('background');
            $table->string('cor_primaria');
            $table->string('nome');
            $table->integer('id_personagem');
            $table->foreign('id_personagem')->references('id')->on('personagem');
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
        Schema::dropIfExists('destaque');
    }
}
