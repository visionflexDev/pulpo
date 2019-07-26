<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribuidoraPropietarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuidora_propietario', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('distribuidora_id')->unsigned();
            $table->integer('propietario_id')->unsigned();


            $table->timestamps();


            // relaciones
             $table->foreign('distribuidora_id')->references('id')->on('distribuidoras')
                ->onDelete('cascade')
                ->onUpdate('cascade');

             $table->foreign('propietario_id')->references('id')->on('propietarios')
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
        Schema::dropIfExists('distribuidora_propietario');
    }
}
