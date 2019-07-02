<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCorrectivoToMantenimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mantenimientos', function (Blueprint $table) {
            $table->integer('correctivo_id')->unsigned();
            $table->foreign('correctivo_id')
                ->references('id')->on('correctivos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mantenimientos', function (Blueprint $table) {
            //
        });
    }
}
