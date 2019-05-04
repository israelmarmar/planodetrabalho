<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Relatorios');
            $table->string('Reunioes');
            $table->string('Status');
            $table->unsignedBigInteger('id_meta');
            $table->foreign('id_meta')
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
        Schema::dropIfExists('mensal');
    }
}
