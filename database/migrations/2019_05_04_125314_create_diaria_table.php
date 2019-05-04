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
            $table->string('Checagem');
            $table->string('Backup');
            $table->string('Manuntencao');
            $table->string('Status');
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
