<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->string('codigo');
            $table->string('instituicao');

            $table->integer('up_xp_aluno');
            $table->integer('up_xp_equipe');
            $table->integer('plus_xp_reagir');
            $table->integer('plus_pb_up_elo');
            $table->integer('plus_xp_compra');

            $table->unsignedBigInteger('prof_id');
            $table->foreign('prof_id')->references('id')->on('professors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
