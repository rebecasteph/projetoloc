<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissaoAtvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missao_atvs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nome');
            $table->string('desc');
            $table->integer('xp');
            $table->integer('pb');
            $table->boolean('ativa');
            $table->boolean('comentarios');
            $table->boolean('aguardar_aprovacao');

            $table->unsignedBigInteger('missao_id');
            $table->foreign('missao_id')->references('id')->on('missaos')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missao_atvs');
    }
}
