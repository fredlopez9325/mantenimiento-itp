<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infraestructura_id')->unsigned();
            $table->foreign('infraestructura_id')
                ->references('id')->on('infraestructuras')
                ->onDelete('cascade');
            $table->string('espacio_revizado');
            $table->string('hallazgo');
            $table->string('atendido');
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
        Schema::dropIfExists('areas');
    }
}
