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
            $table->string('Checagem');
            $table->string('Backup');
            $table->string('Manuntencao');
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
        Schema::dropIfExists('semanal');
    }
}
