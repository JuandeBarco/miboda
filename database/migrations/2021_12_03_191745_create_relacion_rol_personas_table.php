<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionRolPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_rol_personas', function (Blueprint $table) {
            $table->id();
            $table->text('observacion')->nullable();
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('rol_id')->references('id')->on('rol_personas');
            $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::dropIfExists('relacion_rol_personas');
    }
}
