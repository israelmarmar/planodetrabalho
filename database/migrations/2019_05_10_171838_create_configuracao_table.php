<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Implementacao_ferramentas');
            $table->string('Levantamento_ativos');
            $table->string('Cadastro_ferramenta');
            $table->string('Implementacao_processo');
            $table->string('Acompanhamento');
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
        Schema::dropIfExists('configuracao');
    }
}
