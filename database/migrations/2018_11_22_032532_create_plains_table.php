<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plains', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('preventivo_id')->unsigned();
            $table->foreign('preventivo_id')
                ->references('id')->on('preventivos')
                ->onDelete('cascade');
            $table->string('servicio');
            $table->string('tipo');
            $table->string('e');
            $table->integer('number');
            $table->string('ene')->nullable();
            $table->string('feb')->nullable();
            $table->string('mar')->nullable();
            $table->string('abr')->nullable();
            $table->string('may')->nullable();
            $table->string('jun')->nullable();
            $table->string('jul')->nullable();
            $table->string('ago')->nullable();
            $table->string('sep')->nullable();
            $table->string('oct')->nullable();
            $table->string('nov')->nullable();
            $table->string('dic')->nullable();
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
        Schema::dropIfExists('plains');
    }
}
