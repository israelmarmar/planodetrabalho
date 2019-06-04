<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMudancaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mudanca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Customizacao');
            $table->string('Implantacao_processo');
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
        Schema::dropIfExists('mudanca');
    }
}
