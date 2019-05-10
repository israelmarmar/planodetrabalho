<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problema', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Redistribuicao');
            $table->string('Customizacao');
            $table->string('Solucao');
            $table->string('Implantacao_solucao');
            $table->string('Status');
            $table->unsignedBigInteger('atividade_id');
            $table->foreign('atividade_id')
                ->references('id')->on('atividade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('problema');
    }
}
