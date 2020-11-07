<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*         'descr',
        'valor',
        'tipo',
        'turma_id'
 */
        Schema::create('sentencas', function (Blueprint $table) {
            $table->id();
            $table->string('descr')->unique();
            $table->integer('valor');
            $table->enum('tipo', ['positiva', 'negativa']);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentencas');
    }
}
