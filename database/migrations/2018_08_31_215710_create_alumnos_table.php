<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('apellidos');   
            
            $table->timestamps();

            $table->unsignedInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesors')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos')
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
        Schema::dropIfExists('alumnos');
    }
}
