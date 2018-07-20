<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNempleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nempleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codempleado');
            $table->string('nombre');
            $table->string('departamento');
            $table->string('cargo');
            $table->decimal('salario');
            $table->integer('turno_id');
            $table->foreign('turno_id')->references('id')->on('turnos');
            $table->softDeletes();
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
        Schema::dropIfExists('nempleados');
    }
}
