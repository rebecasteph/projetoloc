<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoParticipasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_participas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('aluno_id')->unsigned();
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');

            $table->integer('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
            
            $table->integer('equipe_id')->unsigned();
            $table->foreign('equipe_id')->references('id')->on('equipes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_participas');
    }
}
