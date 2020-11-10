<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')
            ->references('id')
            ->on('grupos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('edad');
            $table->string('email');
            $table->string('telefono');
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
        Schema::dropIfExists('estudiantes');
    }
}
