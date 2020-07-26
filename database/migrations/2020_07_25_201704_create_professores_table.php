<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('foto');
            $table->string('numeroAgente');
            $table->string('dataNascimento');
            $table->string('localNascimento');
            $table->string('numeroBilhete');
            $table->string('estadoCivil')->default('solteiro');
            $table->string('sexo')->default('masculino');
            $table->string('morada')->default('lubango');
            $table->string('nivelAcademico')->default('nivel');
            $table->string('bairro')->default('arco íris');
            $table->string('funcao')->default('funcao');
            

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
        Schema::dropIfExists('professores');
    }
}
