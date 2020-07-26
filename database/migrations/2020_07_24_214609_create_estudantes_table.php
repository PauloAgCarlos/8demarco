<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('foto')->default('foto');
            $table->date('dataNascimento');
            $table->string('localNascimento');
            $table->string('numeroBilhete');
            $table->string('sexo')->default('Masculino');
            $table->string('morada')->default('Lubango');
            $table->string('bairro');
            $table->string('nomeEncarregado');
            $table->string('relacaoComEncarregado');
            $table->string('numeroEncarregado')->default('pai');
            $table->boolean('matriculado')->default('false');
            
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
        Schema::dropIfExists('estudantes');
    }
}
