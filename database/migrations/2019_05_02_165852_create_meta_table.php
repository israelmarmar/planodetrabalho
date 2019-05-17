<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Atividade');
            $table->string('Responsavel');
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
        Schema::dropIfExists('meta');
    }
}
