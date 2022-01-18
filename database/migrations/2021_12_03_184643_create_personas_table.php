<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('alias')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->unsignedTinyInteger('tiene_rol')->default(0);
            $table->unsignedBigInteger('sexo_id');
            $table->foreign('sexo_id')->references('id')->on('sexos');
            $table->unsignedBigInteger('categoria_id')->default(2);
            $table->foreign('categoria_id')->references('id')->on('categoria_personas');
            $table->unsignedBigInteger('evento_id');
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
