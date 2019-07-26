<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opticas', function (Blueprint $table) {
          
            $table->increments('id')->unique();

            // $table->integer('propietario_id')->unisgned();
            // $table->integer('regente_id')->unisgned();
            // 
            $table->string('nombreOptica',200);
            $table->string('razonSocial', 200);
            $table->bigInteger('nit')->unique();
            $table->string('direccion',200);
            $table->bigInteger('celular')->unsigned();
            $table->bigInteger('Telefono')->unsigned();
            $table->bigInteger('ciudad_id')->unsigned();
            $table->bigInteger('sucursal')->unsigned();
            $table->string('optPrincipal',100)->nullable();
            $table->text('observacion');
            $table->enum('status',['AUTORIZADO','NO AUTORIZADO'])->default('AUTORIZADO');
            $table->date('ingresoSede');
            $table->date('actSede');
            $table->string('resolucion');
            $table->boolean('estado');

            $table->timestamps();

            //relaciones
            // $table->foreign('regente_id')->references('id')->on('regentes')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opticas');
    }
}
