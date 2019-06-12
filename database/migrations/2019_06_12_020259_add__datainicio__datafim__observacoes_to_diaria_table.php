<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatainicioDatafimObservacoesToDiariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diaria', function (Blueprint $table) {
            $table->string('datainicio');
            $table->string('datafim');
            $table->string('observacoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diaria', function (Blueprint $table) {
            //
        });
    }
}
