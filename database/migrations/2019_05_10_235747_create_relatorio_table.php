<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nome_cadastrador');
            $table->string('N_processo');
            $table->string('Horario_ocorrido');
            $table->string('Tempo_execucao');
            $table->string('Hora_inicio');
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
        Schema::dropIfExists('relatorio');
    }
}
