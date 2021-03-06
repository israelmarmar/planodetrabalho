<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemanalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semanal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('RotinaDefinida');
            $table->string('Checagem')->default('0');
            $table->string('Backup')->default('0');
            $table->string('Manutencao')->default('[{"Item":"","Status":"A fazer"}]');
            $table->string('Status')->default('0');
            $table->string('observacoes');
            $table->string('metamensuravel');
            $table->string('resultado');
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
        Schema::dropIfExists('semanal');
    }
}
