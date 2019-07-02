<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeriodosToPreventivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('preventivos', function (Blueprint $table) {
            $table->integer('periodo_id')->unsigned();
            $table->foreign('periodo_id')
                ->references('id')->on('periodos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('preventivos', function (Blueprint $table) {
            //
        });
    }
}
