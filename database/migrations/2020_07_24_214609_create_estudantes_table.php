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
            $table->increments('id');
            $table->string('nome');
            $table->string('foto')->default('sem foto');
            $table->date('dataNascimento');
            $table->date('dataEmissaoBilhete');
            $table->date('dataExpiracaoBilhete');
            $table->string('localNascimento');
            $table->integer('idade');
            $table->string('numeroBilhete')->unique();
            $table->string('sexo')->default('Masculino');
            $table->string('morada')->default('Lubango');
            $table->string('bairro');
            $table->string('nomeEncarregado');
            $table->string('relacaoComEncarregado')->default('pai');
            $table->string('numeroEncarregado')->nullable();
            $table->boolean('matriculado')->default(false);

            $table->string('criadoPor');
            $table->string('editadoPor');
            
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
