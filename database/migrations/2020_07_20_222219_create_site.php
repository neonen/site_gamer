<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogo', function (Blueprint $table) {
            $table->id();
            $table->string('jogo')->nullable();
            $table->string('logo')->nullable();
            $table->string('frase')->nullable();
            $table->string('desc_form')->nullable();
            $table->integer('id_destaque')->nullable();
            $table->foreign('id_destaque')->references('id')->on('destaque');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogo');
    }
}
