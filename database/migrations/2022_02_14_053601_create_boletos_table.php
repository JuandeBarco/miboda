<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('qr_image')->nullable();
            $table->unsignedBigInteger('grupo_id')->nullable();
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->unsignedBigInteger('estado_id')->default(1);
            $table->foreign('estado_id')->references('id')->on('estado_boletos');
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
        Schema::dropIfExists('boletos');
    }
}
