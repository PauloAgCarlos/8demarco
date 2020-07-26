<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->string('aluno');
            $table->string('foto')->default('foto');
            $table->string('dataNascimento');
            $table->string('numeroBilhete');
            $table->string('periodo')->default('laboral');  
            $table->string('turno')->default('manha');  
            $table->string('classe')->default('1ª Classe');  
            $table->string('numeroEstudante');


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
        Schema::dropIfExists('matriculas');
    }
}
