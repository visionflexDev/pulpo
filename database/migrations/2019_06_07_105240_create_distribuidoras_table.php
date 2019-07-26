<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribuidorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuidoras', function (Blueprint $table) {
            $table->increments('id')->unique;

            $table->string('razonSocial',150);
            $table->bigInteger('nit');
            $table->integer('regente_id');
            $table->integer('propietario_id');
            $table->string('direccion',150);
            $table->integer('telefono');
            $table->string('ciudad');
            $table->enum('status',['ABIERTO','CLAUSURADO'])->default('ABIERTO');
            $table->boolean('estado');
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
        Schema::dropIfExists('distribuidoras');
    }
}
