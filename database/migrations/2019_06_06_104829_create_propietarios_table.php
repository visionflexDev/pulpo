<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
           
            $table->increments('id')->unique;
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->integer('identificacion')->unsigned();
            $table->mediumtext('observacion');
            $table->integer('telefono')->unsigned();
            $table->integer('celular')->usigned();


            $table->timestamps();

            // relaciones
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propietarios');
    }
}
