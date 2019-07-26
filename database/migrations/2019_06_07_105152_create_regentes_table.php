<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regentes', function (Blueprint $table) {
            $table->increments('id')->unique();

            
            $table->integer('optica_id')->unsigned();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->integer('identificacion')->unsigned();
            $table->string('codSede',120);
            $table->string('matricula',120);
            $table->date('titAcad');
            $table->date('provNac');
            $table->date('regSede');
            $table->integer('ciudad_id');
            $table->string('direccion',200);
            $table->integer('telefono')->unsigned();
            $table->integer('Celular')->unsigned();
            $table->enum('stat',['HABILITADO','DESHABILITADO']);
            $table->string('nivAcad',150);
            $table->string('titProf',150);
            $table->boolean('estado');
            $table->timestamps();

            // relaciones
            // regente recibe el id de optica
            // 
            // 
          

             $table->foreign('optica_id')->references('id')->on('opticas')
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
        Schema::dropIfExists('regentes');
    }
}
