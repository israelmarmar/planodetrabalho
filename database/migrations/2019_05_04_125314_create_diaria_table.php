<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('RotinaDefinida');
            $table->string('Checagem')->default('0');
            $table->string('Backup')->default('0');
            $table->string('Manutencao')->default('0');
            $table->string('Status')->default('A Fazer');
            $table->string('Datainicio');
            $table->string('Datafim');
            $table->string('metamensuravel');
            $table->string('resultado');
            $table->string('observacoes');
            $table->unsignedBigInteger('meta_id');
            $table->foreign('meta_id')
                ->references('id')->on('meta')
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
        Schema::dropIfExists('diaria');
    }
}
